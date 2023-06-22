@extends('layouts.admin-layouts')

@section('title', "Редактирование товара: {$product->title}")

@section('content')

    <div class="row">
        <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
                    </div>
                @endif
                <!-- form start -->
                <form action="{{ route('product.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nameCategory">Название Товара</label>
                            <input required value="{{ $product->title }}" type="text" name="title" class="form-control" id="nameCategory" placeholder="Введите название">
                        </div>
                    </div>
                    <div class="form-group card-body">
                        <label>Выбрать категорию</label>
                        <select  required  name="catalog_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($category->id == $product->catalog_id) selected @endif> {{ $category->title }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group card-body">
                        <label for="feature_image">Добавить главное фото</label>
                        <img src="{{ $product->img_url }}" class="img-uploaded" alt="">
                        <input  required value="{{ $product->img_url }}" type="text"  class="form-control"  id="feature_image" name="img_url">
                        <a href="" class="popup_selector btn btn-primary mt-2" data-inputid="feature_image">Выбрать фото</a>
                    </div>

                    <div class="form-group card-body">
                        <label for="">Цена</label>
                        <input  required  value="{{ $product->price }}"  type="number" class="form-control" name="price">
                    </div>

                    <div class="form-group card-body">
                        <textarea  required  name="description" class="editor">{!! $product->description !!} </textarea>
                    </div>


                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>

                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>




@endsection
