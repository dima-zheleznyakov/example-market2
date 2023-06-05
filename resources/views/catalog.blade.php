@extends('layouts.app-home')
@section('content')
    <div class="container">
        <div class="banner-header banner-lbook3 space-30">
            <img src="{{ asset('/assets/images/banner-mansory.jpg') }}" alt="Banner-header">
            <div class="text">
                @if($_SERVER['REQUEST_URI'] == "/catalog/" || $_SERVER['REQUEST_URI'] == "/catalog")
                    <h3>Вся продукция</h3>
                @else
                    @foreach($catalogs as $catalog)
                        @if($_SERVER['REQUEST_URI'] == "/catalog/{$catalog->id}")
                            <h3>{{ $catalog->title }}</h3>
                        @endif
                    @endforeach
                @endif
                <p>
                    <a href="/" title="Home">Главная</a>
                    <i class="fa fa-caret-right"></i>
                    @if($_SERVER['REQUEST_URI'] == "/catalog/" || $_SERVER['REQUEST_URI'] == "/catalog")
                        <span>Вся продукция</span>
                    @else
                        <a href="/catalog" title="catalog">Вся продукция</a>
                    @endif
                    @foreach($catalogs as $catalog)
                        @if($_SERVER['REQUEST_URI'] == "/catalog/{$catalog->id}")
                            <i class="fa fa-caret-right"></i>
                            {{ $catalog->title }}
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
    </div>
    <!-- End Banner Grid -->
    <div class="container">
        <div id="primary" class="col-xs-12 col-md-9">
            <div class="wrap-breadcrumb">
                <div class="ordering">
                    <div class="float-right">
                        <p class="result-count">Показано: 1-{{ $products->count() }} из {{ $products->total() }}</p>
                    </div>
                </div>
            </div>
            <div class="products ver2 grid_full grid_sidebar hover-shadow furniture">

                    @foreach($products as $product)
                    <div class="item-inner">
                        <div class="product">
                            <div class="product-images">
                                <a href="/products/{{$product->id}}" title="product-images">
                                    <img class="primary_image" src="{{asset($product->img_url)}}" alt=""/>
                                </a>
                                <div class="action">
                                    <a class="add-cart" href="/products/{{$product->id}}" title="Add to cart" ><i class="icon-bag"></i></a>
                                    <a class="wish" href="/products/{{$product->id}}" title="Wishlist" ><i class="icon icon-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper-descr">
                            <a href="/products/{{$product->id}}" title="Bouble Fabric Blazer"><p class="product-title"> {{ $product->title }} </p></a>
                            <p class="product-price">{{ $product->price }} Тг.</p>
                        </div>
                    </div>
                    <!-- End product -->
                    @endforeach


            </div>
            <!-- End product-content products  -->
            <div class="pagination-container">
                {{ $products->links() }}
            </div>
            <!-- End pagination-container -->
        </div>
        <!-- End Primary -->

        <div id="secondary" class="widget-area col-xs-12 col-md-3">
            <aside class="widget widget_product_categories">
                <h3 class="widget-title">Categories</h3>
                <ul class="product-categories">

                    @foreach($catalogs as $catalog)
                    <li><a href="/catalog/{{ $catalog->id }}" title="{{ $catalog->title }}">{{ $catalog->title }}</a></li>
                    @endforeach


                </ul>
            </aside>
{{--            <aside class="widget widget_price">--}}
{{--                <h3 class="widget-title">Цена</h3>--}}
{{--                <p>....</p>--}}
{{--            </aside>--}}

            <aside class="widget widget_feature">
                <h3 class="widget-title">Популярные Товары</h3>
                <ul>
                    <li>
                        <a class="images" href="#" title="images">
                            <img class="img-responsive" src="{{ asset('/assets/images/products/furniture/1.jpg') }}" alt="images">
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                        </div>
                    </li>
                    <li>
                        <a class="images" href="#" title="images">
                            <img class="img-responsive" src="{{ asset('/assets/images/products/furniture/1.jpg') }}" alt="">
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                        </div>
                    </li>
                    <li>
                        <a class="images" href="#" title="images">
                            <img class="img-responsive" src="{{asset('/assets/images/products/furniture/1.jpg')}}" alt="">
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                        </div>
                    </li>
                    <li>
                        <a class="images" href="#" title="images">
                            <img class="img-responsive" src="{{asset('/assets/images/products/furniture/1.jpg')}}" alt="">
                        </a>
                        <div class="text">
                            <h2>
                                <a href="#" title="Butterfly Bar Stool">Butterfly Bar Stool</a>
                            </h2>
                            <p><span class="price-old">$700</span><span>$350</span></p>
                        </div>
                    </li>
                </ul>
            </aside>
        </div>
        <!-- End Secondary -->
    </div>
    <!-- end product sidebar -->

@endsection
