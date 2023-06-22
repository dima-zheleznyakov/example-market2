@extends('layouts.admin-layouts')

@section('title', "Редактирование категории: {$category->title}")

@section('content')

    <div class="row">
        <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nameCategory">Название категории</label>
                            <input required value="{{ $category['title'] }}" type="text" name="title" class="form-control" id="nameCategory" placeholder="Введите название">
                        </div>
                    </div>
                    <div class="card card-outline card-info">
                        <div class="card-body">
                              <textarea name="description" id="summernote">
                                {{ $category['description'] }}
                              </textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Обновить</button>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
                        </div>
                    @endif
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>




@endsection
