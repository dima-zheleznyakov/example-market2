@extends('layouts.app-home')
@section('content')
{{--$product--}}
<div class="main-content">
    <div class="container">
        <div class="banner-header banner-lbook3">
            <img src="/assets/images/banner-mansory.jpg" alt="Banner-header">
            <div class="text">
                <h3></h3>
                <p><a href="#" title="Home">Главная</a><i class="fa fa-caret-right"></i><a href="#" title="Home">Каталог</a><i class="fa fa-caret-right"></i>{{ $product->title }}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="product-details-content">
            <div class="col-md-6 col-sm-6">
                <div class="product__detail-img">
                    <img src="/{{ $product->img_url }}" alt="{{ $product->title }}">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box-details-info">
                    <div class="product-name">
                        <h1>{{ $product->title }}</h1>
                    </div>
                    <div class="wrap-price">
                        <p class="price">{{ $product->price }} Тг.</p>
                    </div>
                </div>
                <div class="options">
                    {{ $product->short_descr }}

                    <div class="box space-20">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="title title-quantity">
                                    <h3>Количество</h3>
                                </div>
                                <form enctype="multipart/form-data">
                                    <input data-step="1" value="1" title="Qty" min="1" size="4" type="number">
                                </form>
                            </div>
                            <!-- End col-md-5 -->
                        </div>
                        <!-- End row -->
                    </div>
                    <!-- End row -->
                    <div class="action">
                        <a class="link-v1 add-cart" title="Add to cart" href="#"><span>Add to cart</span></a>
                        <a class="link-v1 wish" title="Wishlist" href="#"><i class="icon icon-heart"></i></a>
                    </div>
                </div>
                <!-- End Options -->
            </div>
        </div>
        <!-- End product-details-content -->
        <div class="hoz-tab-container space-padding-tb-30">
            {{ $product->description }}
        </div>




@endsection
