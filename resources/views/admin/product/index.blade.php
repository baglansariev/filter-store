@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <p class="mb-0">Товары</p>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Создать</a>
        </div>
        <div class="card-body">

            @if (session()->has('msg_success'))
                <div class="card-alert alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('msg_success') }}
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
            @endif

            @if (session()->has('msg_error'))
                <div class="card-alert alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('msg_error') }}
                    <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </a>
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Изображение</th>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                @if (isset($products) && $products->count())
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>
                                <img class="table-image" src="{{ asset($product->main_image) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $product->id) }}">{{ $product->name }}</a>
                            </td>
                            <td>{{ $product->price }} ₸</td>
                            <td>
                                @if (isset($product->category))
                                    {{ $product->category->name }}
                                @else
                                    Без категории
                                @endif
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning mr-1">Изменить</a>
                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                @endif
                </tbody>
            </table>
            @if (isset($products) && $products->count())
                {{ $products->links() }}
            @endif

        </div>
    </div>

@endsection