@extends('layouts.app-home')
@section('content')

    <h1>{{$product->title}}</h1>

    <img src="{{asset($product->img_url)}}" width="500" height="600">
    <br>
    <span>{{$product->price}}</span>
@endsection
