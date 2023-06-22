@extends('layouts.admin-layouts')

@section('title', 'Вся продукция')

@section('content')

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
        </div>
    @endif

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        id
                    </th>
                    <th style="width: 20%">
                        Название
                    </th>
                    <th style="width: 20%">
                        Категория
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>
                            {{ $product->id }}
                        </td>
                        <td>
                            <a>
                                {{ $product->title }}
                            </a>
                            <br>
                            <small>
                                Created {{ $product->created_at }}
                            </small>
                        </td>
                        <td>
                            {{ $product->category['title'] }}
                        </td>
                        <td class="project-actions text-right">

                            <a class="btn btn-info btn-sm" href="{{ route('product.edit', $product->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Редактировать
                            </a>

                            <form style="display: inline-block" method="POST" action="{{ route('product.destroy', $product->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"  type="submit"><i class="fas fa-trash"></i> Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
