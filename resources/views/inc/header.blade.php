
<header class="header @if($_SERVER['REQUEST_URI'] != '/') header-page @endif">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-3">
                <div class="header-logo">
                    <img class="logo" src="/img/logo.png" alt="logo">
                    <a href="/" class="logo-text"><span>growth</span> <span>pharmaceutical</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-1 d-flex align-items-center justify-content-center mobile-none">
                <div class="header-menu">
                    <ul class="d-flex">
                        <li class="header-menu__item"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li class="header-menu__item"><a href="/"><i class="home"></i></a></li>
                        <li class="header-menu__item"><a href="/catalog">Продукция</a></li>
                        <li class="header-menu__item"><a href="/contact">Контакты</a></li>
                        <li class="header-menu__item"><a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a></li>

                        <li class="header-menu__item">
                            <a href="/carts">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                    <?
                                    if (Auth::id() !== null){
                                        $quantity = 0;
                                        foreach ($carts as $cart){
                                            foreach ($cartItems as $cartItem){
                                                if ($cart->user_id === \Illuminate\Support\Facades\Auth::id()){
                                                    if ($cart->id === $cartItem->cart_id){
                                                        $quantity++;
                                                    }
                                                }
                                            }
                                        }
                                        if($quantity > 0){
                                            echo "<div class='cart-quantity'><span>" . $quantity . "</span></div>";
                                        }
                                    }
                                    ?>
                        </li>

                    </ul>
                </div>
                <div class="header-menu-mobile">
                    <ul class="">
                        <form class="d-flex search-form">
                            <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Поиск">
                            <button class="btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                        <li class="header-menu__item"><a href="/">Главная</a></li>
                        <li class="header-menu__item"><a href="/catalog">Продукция</a></li>
                        <li class="header-menu__item"><a href="/contact">Контакты</a></li>
                        <li class="header-menu__item icon"><a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a></li>

                        <li class="header-menu__item icon">
                            <a href="/carts">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-quantity"></span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-8 d-flex align-items-center justify-content-end">
                <a href="tel:+77000751111" class="number">+7 700 075 1111</a>
                <div class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

    @if($_SERVER['REQUEST_URI'] == '/')
        <div class="title-wrapper">
            <div class="row">
                <div class="col-xl-6 col-lg-4">
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="title-block">
                        <h3 class="title">Genotropin Pfizer </h3>
                        <p class="descr">
                            Это препарат разработан на основе
                            гормона роста.
                            Многие опытные спортсмены
                            советуют купить Genotropin Pfizer
                        </p>
                        <a href="/products/46" class="btn btn-header">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-title-bg"></div>
    @endif
    </div>
</header>






