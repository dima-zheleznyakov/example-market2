<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content popup-search">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control control-search" placeholder="Search and hit enter...">
                    <button class="button_search" type="button">Search</button>
                </div><!-- /input-group -->

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- End pushmenu -->
<div class="wrappage">
    <!-- <div id="rtl">RTL</div> -->
    <header id="header" class="header-v3">
        <div id="topbar">
            <div class="container">
                <div class="inner-topbar box">
                    <div class="float-left">
                        <p>Связаться с нами:<span>+7 700 000 0000</span></p>
                        <p><a href="mailto:info@gmail.com" title="mail">info@gmail.com</a></p>
                    </div>
                    <div class="float-right align-right">
                        <!-- End hover-menu -->
                        <div class="hover-menu">
                            <a href="#" title="USD">Мой аккаунт</a>
                            <i class="fa fa-angle-down"></i>
                            <ul class="list-menu">
                                <li><a href="/login" title="USD">Войти</a></li>
                                <li><a href="/register" title="USD">Регистрация</a></li>
                            </ul>
                        </div>
                        <!-- End hover-menu -->
                    </div>
                </div>
            </div>
            <!-- End container -->
        </div>
        <!-- End topbar -->
        <div class="header-top">
            <div class="container">
                <div class="box">
                    <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                    <div class="logo"><a href="/" title="Uno">
                            <img src="/assets/images/logo.png" alt="images">
                        </a></div>
                    <div class="logo-mobile"><a href="#" title="Xanadu"><img src="/assets/images/logo.png" alt="Xanadu-Logo"></a></div>

                    <div class="box-right">
                        <div class="cart hover-menu">
                            <p class="icon-cart hidden-desktop" title="Add to cart">
                                <i class="icon"></i>
                                <span class="cart-count">2</span>
                            </p>
                            <div class="icon-cart ver2" title="Add to cart">
                                <i class="icon"></i>
                                <div class="text align-left">
                                    <h3>Моя корзина</h3>
                                    <p><span class="items">3 товара</span> - <span class="price">90000 тг.</span></p>
                                </div>
                            </div>
                            <div class="cart-list list-menu">
                                <ul class="list">
                                    <li>
                                        <a href="#" title="" class="cart-product-image"><img src="/assets/images/products/1.jpg" alt="Product"></a>
                                        <div class="text">
                                            <p class="product-name">Названия</p>
                                            <p class="product-price"><span class="price">30000 тг.</span></p>
                                            <p class="qty">Кол.: 3</p>
                                        </div>
                                        <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>
                                    </li>
                                </ul>
                                <p class="total"><span class="left">Сумма:</span> <span class="right">90000 тг.</span></p>
                                <div class="bottom">
                                    <a class="link-v1" href="#" title="viewcart">Корзина</a>
                                    <a class="link-v1 rt" href="#" title="checkout">Заказать</a>
                                </div>
                            </div>
                        </div>
                        <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                            <i class="icon"></i>
                        </div>
                    </div>
                    <nav class="mega-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <ul class="nav navbar-nav" id="navbar">
                            <li class="level1 active"><a href="/" title="Home">Главная</a></li>
                            <li class="level1 dropdown"><a href="/catalog" title="collections">Каталог</a>
                                <ul class="menu-level-1 dropdown-menu">
                                    @foreach($catalogs as $catalog)
                                    <li class="level2"><a href="/catalog/{{ $catalog->id }}" title="menu">{{ $catalog->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="level1"><a href="#" title="collections">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End container -->
        </div>
        <!-- End header-top -->
    </header><!-- /header -->













