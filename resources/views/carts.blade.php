@extends('layouts.app-home')
@section('content')

    <section>
        @foreach($products as $product)
            <h4>{{ $product->title }}</h4> <br>
        @endforeach
    </section>

@endsection
