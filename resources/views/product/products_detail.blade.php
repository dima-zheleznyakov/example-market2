@extends('layouts.app-home')
@section('content')

    <section class="detail">
        <div class="container-fluid">
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
                                    <a class="breadcrumbs_item " href="/catalog/{{ $catalog->id }}">{{ $catalog->title }}</a>
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
                        <form class="form-order ajax_form" action="/catalog/carts-add" method="POST" id="ajax_form" >  {{--    action="/catalog/carts-add"--}}
                            @csrf
                            <label>
                                <span>Количество:</span>
                                <input class="quantity form-control" type="number" name="quantity" value="1">
                            </label>
                            <br>
                            <input name="product_id" type="hidden" value="{{$product->id}}">
                            <button id="btn" class="btn btn-order" type="submit">В корзину</button>
                            @if(session('success'))
                                <div class="alert alert-success add-to-carts" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                    <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
                                </div>
                            @endif
                        </form>
                        <div id="result_form"></div>
                    </div>
                </div>
            </div>
            <div class="detail-description">
                {!! $product->description !!}

            </div>
        </div>
    </section>


@endsection
