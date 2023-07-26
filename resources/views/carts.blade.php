@extends('layouts.app-home')
@section('content')

<section class="carts-wrapper">
    <div class="container-fluid">

       <div class="carts-top">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item" href="/">Главная</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="breadcrumbs_item active" >Корзина</span>
            </div>
           <div class="dropdown">
               <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ Auth::user()->name }}
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                   <form  class="dropdown-item"  method="POST" action="{{ route('logout') }}">
                       @csrf
                       <button >Выйти</button>
                   </form>
               </div>
           </div>
       </div> <!-- carts-top -->
            @if(!empty($products))
            <div class="carts">
                <div class="carts-head cart-item d-flex">
                    <div>Товар</div>
                    <div>Цена за ед.</div>
                    <div>Количество</div>
                    <div>Стоимость</div>
                    <div>
                        <form action="/delete/product/all" method="post">
                            @csrf
                            <button class="delete"  type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="carts-body">
                @foreach($products as $product)
                    <div class="cart-item d-flex">
                        <div>
                            <div class="photo-wrapper">
                                <a href="/products/{{ $product->id }}">
                                    <img src="{{ $product->img_url }}">
                                </a>
                            </div>
                            <a class="carts-title" href="/products/{{ $product->id }}">
                                {{ $product->title }}
                            </a>
                        </div>
                        <div>
                            <div class="price" id="price">{{ $product->price }}</div>
                        </div>
                        <div>
                            <form class="quantity-form" action="" method="POST">
                                @foreach($cartItem as $quantity)
                                    @if($quantity->product_id == $product->id)
                                        <input class="quantity form-control" id="quantity_{{ $product->id }}" type="number" name="quantity" min="1"  data-price="{{ $product->price }}" value="{{ $quantity->quantity }}"> <span>шт.</span>
                                    @endif
                                @endforeach
                            </form>
                        </div>
                        <div>
                            <div  class="total-price"  id="total-price_{{ $product->id }}"></div>
                        </div>
                        <div>
                            <form action="/delete/product" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <button class="delete" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div> <!-- cart-item -->
                @endforeach
                </div> <!-- carts-body -->
            </div> <!-- carts -->

            @elseif(session('success'))
                <div class="alert alert-success add-to-carts" style="margin: 0 auto;text-align: center;width: 360px; role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
                </div>
            @else
                <span class="title" style="color: #3a4956; font-size: 30px">Корзина пустая</span>
            @endif

    @if(!empty($products))
        <div class="order">
            <div class="total price-cart">Итого: <span id="total-cart-price"></span></div>
            <!-- Кнопка-триггер модального окна -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Купить в один клик
            </button>
            <!-- Модальное окно -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-order" action="/order" method="POST">
                            @csrf
                            <div class="modal-body">
                                <span>Пожалуйста, укажите ваш контактный телефон. <br>
                                Мы свяжемся с вами в ближайшее время.</span> <br>

                                <label for="name">Ваше имя</label> <br>
                                <input required type="text" id="name" name="name" class="form-control" placeholder="Введите ваше имя" >

                                <label for="number">Контактный телефон</label> <br>
                                <input required type="number" id="number" name="number" class="form-control" placeholder="Введите ваш номер" >

                                <label for="comment">Комментарий</label> <br>
                                <textarea name="comment" id="comment" class="form-control"
                                placeholder="Укажите тут свои комментарии и пожелания по данному заказу"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Заказать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- order -->
    @endif
    </div> <!-- container-fluid -->
</section> <!-- carts-wrapper -->

<script>

    // обновление количества товара

    // Функция для обновления общей стоимости
    function updateTotalPrice(productId) {
        const quantityInput = document.getElementById('quantity_' + productId);
        const totalPriceElement = document.getElementById('total-price_' + productId);
        const price = parseFloat(quantityInput.getAttribute('data-price'));
        const quantity = parseInt(quantityInput.value);

        const totalPrice = price * quantity;
        totalPriceElement.textContent = totalPrice.toFixed(0);

        // Обновляем общую сумму заказа
        updateTotalCartPrice();

        // Отправляем AJAX запрос для обновления количества товара в базе данных
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const formData = new FormData();
        formData.append('_token', csrfToken);
        formData.append('product_id', productId);
        formData.append('quantity', quantity);

        fetch('/update/cart-item', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
            },
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                // Обработка ответа от сервера (при необходимости)
            })
            .catch(error => {
                // Обработка ошибки (при необходимости)
            });
    }

    // Функция для обновления общей суммы заказа
    function updateTotalCartPrice() {
        const totalPrices = document.querySelectorAll('.total-price');
        let totalCartPrice = 0;

        totalPrices.forEach(totalPrice => {
            totalCartPrice += parseFloat(totalPrice.textContent);
        });

        const priceCart = document.getElementById('total-cart-price');
        priceCart.textContent = totalCartPrice.toFixed(0);
    }

    // Добавляем обработчик события input для каждого input с классом quantity
    const quantityInputs = document.querySelectorAll('.quantity');
    quantityInputs.forEach(input => {
        const productId = input.getAttribute('id').split('_')[1];
        input.addEventListener('input', function() {
            updateTotalPrice(productId);
        });
        updateTotalPrice(productId);
    });

</script>

@endsection


