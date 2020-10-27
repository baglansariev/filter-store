@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <p class="mb-0">Добавление нового товара</p>
        </div>
        <div class="card-body">
            @if (isset($category) && !empty($category))
                <form method="post" action="{{ route('category.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="c-label" for="inputName">Название</label>
                                <input type="text" class="form-control" name="name" id="inputName" aria-describedby="emailHelp" placeholder="Наименование" value="{{ $category->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="c-label" for="inputImage">Изображение</label>
                                <div class="image_edit d-flex flex-column align-items-start">
                                    <button id="img_change" type="button">
                                        <img src="{{ asset($category->image) }}" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons d-flex justify-content-end mt-3 mb-3">
                        <button type="submit" class="btn btn-success mr-1">Добавить</button>
                        <a href="{{ route('category.index') }}" class="btn btn-danger">Отменить</a>
                    </div>
                </form>
            @else
                <p>Такая категория не существует</p>
            @endif
        </div>
    </div>

@endsection