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
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 order-md-1 order-last">
                <section class="catalog catalog_page">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="catalog_item">
                                        <div class="catalog_img">
                                            <img src="{{asset($product->img_url)}}" alt="">
                                        </div>
                                        <div class="catalog_info">
                                            <h4 class="catalog_title"><a href="/products/{{$product->id}}">{{ $product->title }}</a></h4>
                                            <span class="catalog_category">Категория: Инъекционные препараты</span>
                                            <div class="catalog_bottom">
                                                <hr>
                                                <div class="catalog_price"><span>Цена:</span><span>{{ $product->price }}тг.</span></div>
                                                <a class="btn-order" href="/products/{{$product->id}}">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
    </div>

@endsection
