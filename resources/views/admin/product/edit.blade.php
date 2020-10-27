@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <p class="mb-0">Изменение товара</p>
        </div>
        <div class="card-body">
            @if (isset($product) && !empty($product))
                <form method="post" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="c-label" for="inputName">Наименование</label>
                                <input type="text" class="form-control" name="name" id="inputName" aria-describedby="emailHelp" placeholder="Наименование" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label class="c-label" for="inputShortDesc">Краткое описание</label>
                                <textarea name="short_desc" id="inputShortDesc" class="form-control">{{ $product->short_desc ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="c-label" for="inputCategory">Категория</label>
                                <select name="category" id="inputCategory" class="form-control" required>
                                    @if (isset($categories) && $categories->count())
                                        @foreach($categories as $category)
                                            @if (isset($product->category) && $product->category->id == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    @else
                                        <option value="0">Выбрать</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="c-label" for="inputPrice">Цена</label>
                                <input type="number" name="price" class="form-control" id="inputPrice" placeholder="Цена" required value="{{ $product->price }}">
                            </div>
                            <div class="form-group">
                                <label class="c-label" for="inputFullDesc">Полное описание</label>
                                <textarea name="full_desc" id="inputFullDesc" class="form-control" required>{{ $product->full_desc ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="c-label" for="inputImage">Изображение</label>
                                <div class="image_edit d-flex flex-column align-items-start">
                                    <button id="img_change" type="button">
                                        <img src="{{ asset($product->main_image) }}" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons d-flex justify-content-end mt-3 mb-3">
                        <button type="submit" class="btn btn-success mr-1">Сохранить</button>
                        <a href="{{ route('product.index') }}" class="btn btn-danger">Отменить</a>
                    </div>
                </form>
            @else
                <p>Такой товар не существует</p>
            @endif
        </div>
    </div>

@endsection