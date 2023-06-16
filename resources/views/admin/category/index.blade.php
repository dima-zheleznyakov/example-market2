@extends('layouts.admin-layouts')

@section('title', 'Все категории')

@section('content')

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
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->id }}
                    </td>
                    <td>
                        <a>
                            {{ $category->title }}
                        </a>
                        <br>
                        <small>
                            Created {{ $category->created_at }}
                        </small>
                    </td>
                    <td class="project-actions text-right">

                        <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category['id']) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Редактировать
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Удалить
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
