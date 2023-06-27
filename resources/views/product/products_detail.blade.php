@extends('layouts.app-home')
@section('content')

    <section class="detail">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="detail-photo laptop">
                        <img src="{{asset($product->img_url)}}" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="detail-info">
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item" href="/">Главная</a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <a class="breadcrumbs_item" href="/catalog">Каталог</a>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            @foreach($catalogs as $catalog)
                                @if($catalog->id == $product->catalog_id)
                                    <span class="breadcrumbs_item active">{{ $catalog->title }}</span>
                                @endif
                            @endforeach
                        </div>
                        <h1 class="title">{{ $product->title }}</h1>
                        <div class="detail-photo mobile">
                            <img src="{{asset($product->img_url)}}" alt="">
                        </div>
                        <div class="price">
                            <span>Цена:</span> <span>{{ $product->price }}тг.</span>
                        </div>
                        <a href="#" class="btn btn-detail-order">
                            <i class="fa fa-whatsapp"></i> WhatsApp
                        </a>
                        <form method="POST" action="/catalog/carts-add">
                            @csrf
                            <input name="product_id" type="hidden" value="{{$product->id}}">
                            <button class="btn-order" type="submit">Купить</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="detail-description">
                {!! $product->description !!}

            </div>
        </div>
    </section>




@endsection
