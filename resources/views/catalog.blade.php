@extends('layouts.app-home')
@section('content')
    <div class="container">
        <div class="banner-header banner-lbook3 space-30">
            <img src="{{ asset('assets/images/banner-mansory.jpg') }}" alt="Banner-header">
            <div class="text">
                <h3>all products</h3>
                <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>All Products</p>
            </div>
        </div>
    </div>
    <!-- End Banner Grid -->
    <div class="container">
        <div id="primary" class="col-xs-12 col-md-9">
            <div class="wrap-breadcrumb">
                <div class="ordering">
                    <div class="float-left">
                        <span class="col active"></span>
                        <span class="list"></span>
                        <p class="result-count">Showing 1-10 of {{ $products->count() }} relults</p>
                    </div>
                    <div class="float-right">
                        <form action="#" method="get" class="order-by">
                            <p>Sort by :</p>
                            <select class="orderby" name="orderby">
                                <option>popularity</option>
                                <option selected="selected">average rating</option>
                                <option>newness</option>
                                <option>price: low to high</option>
                                <option>price: high to low</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="products ver2 grid_full grid_sidebar hover-shadow furniture">
                <div class="item-inner">

                    @foreach($products as $product)
                    <div class="product">
                        <div class="product-images">
                            <a href="#" title="product-images">
                                <img class="primary_image" src="{{asset($product->img_url)}}" alt=""/>
                            </a>
                            <div class="action">
                                <a class="wish" href="#" title="Wishlist" ><i class="icon icon-heart"></i></a>
                                <a class="zoom" href="#" title="Quick view" ><i class="icon icon-magnifier-add "></i></a>
                                <a class="add-cart" href="#" title="Add to cart" ><i class="icon-bag"></i></a>
                            </div>
                        </div>
                        <a href="/products/{{$product->id}}" title="Bouble Fabric Blazer"><p class="product-title"> {{ $product->title }} </p></a>
{{--                        <p class="product-price-old">$700.00</p>--}}
                        <p class="product-price">{{ $product->price }}</p>
                        <p class="description">Dramatically transition excellent information rather than mission-critical results. Competently communicate fully tested core competencies through holistic resources. Professionally maintain high-payoff best practices whereas user-centric alignments. Intrinsicly engage future-proof best practices whereas economically sound resources. Holisticly maximize multidisciplinary synergy before magnetice-tailers.</p>

                        <div class="social box">
                            <h3>Share this :</h3>
                            <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                            <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                            <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                            <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                            <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                    <!-- End product -->
                    @endforeach
                        <div >
                            {{$products->links()}}
                        </div>

                </div>
            </div>
            <!-- End product-content products  -->
            <div class="pagination-container">
                <nav class="pagination align-right">
                    <a class="prev page-numbers" href="#"><i class="fa fa-angle-left"></i></a>
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="page-numbers" href="#">3</a>
                    <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                </nav>
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
            <aside class="widget widget_price">
                <h3 class="widget-title">Цена</h3>
                <p>....</p>
            </aside>

            <aside class="widget widget_feature">
                <h3 class="widget-title">Популярные Товары</h3>
                <ul>
                    <li>
                        <a class="images" href="#" title="images">
                            <img class="img-responsive" src="{{asset('assets/images/products/furniture/1.jpg')}}" alt="images">
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
                            <img class="img-responsive" src="{{asset('assets/images/products/furniture/1.jpg')}}" alt="">
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
                            <img class="img-responsive" src="{{asset('assets/images/products/furniture/1.jpg')}}" alt="">
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
                            <img class="img-responsive" src="{{asset('assets/images/products/furniture/1.jpg')}}" alt="">
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
