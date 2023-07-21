@extends('layouts.app-home')
@section('content')




    <div class="container-fluid">
        <div class="breadcrumbs">
            <a class="breadcrumbs_item" href="/">Главная</a>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            @if($_SERVER['REQUEST_URI'] != '/catalog')
                <a class="breadcrumbs_item" href="/catalog">Каталог</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                @foreach($catalogs as $catalog)
                    <? $catalog_uri = "/catalog/" . $catalog->id; ?>
                    @if($_SERVER['REQUEST_URI'] == $catalog_uri)
                        <span class="breadcrumbs_item active">{{ $catalog->title }}</span>
                    @endif
                @endforeach
            @else
                <span class="breadcrumbs_item active">Каталог</span>
            @endif
        </div>
        @if(session('success'))
            <div class="alert alert-success add-to-carts add-to-carts-in-catalog" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
            </div>
        @endif
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 order-md-1 order-last">
                <section class="catalog catalog_page">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-4">
                                <div class="product_item">
                                    <a href="/products/{{$product->id}}">
                                        <div class="product_img" style="background-image: url({{ str_replace('\\', '/', $product->img_url) }});"></div>
                                    </a>
                                    <div class="product_text">
                                        <h1 class="title"><a href="/products/{{$product->id}}">{{ $product->title }}</a></h1>
{{--                                            <p class="descr">Инъекционные препараты</p>--}}
                                        <div class="product_btn">
                                            <form method="POST" action="/catalog/carts-add" id="ajax_form"  class="form-btn ajax_form">
                                                @csrf
                                                <input name="product_id" type="hidden" value="{{$product->id}}">
                                                <input name="quantity" type="hidden" value="1">
                                                <button id="btn" type="submit">В корзину</button>
                                            </form>
                                            <span>{{ $product->price }}тг.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-3 order-md-2 order-first">
                <div class="filter-category">
                    <h3 class="title">Категории</h3>
                    <ul>
                        @foreach($catalogs as $catalog)
                            <li><a href="/catalog/{{ $catalog->id }}" title="{{ $catalog->title }}">{{ $catalog->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="navigation">{{ $products->links() }}</div>
    </div>

@endsection
