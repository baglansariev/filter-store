<div class="card">
    <div class="card-header">Меню</div>

    <div class="card-body">
        <ul class="admin-menu">
            <li class="d-flex justify-content-between">
                <a href="{{ route('category.index') }}">Категории</a>
                <span>({{ $categories->count() }})</span>
            </li>
            <li class="d-flex justify-content-between">
                <a href="{{ route('product.index') }}">Товары</a>
                <span>({{ $products->count() }})</span>
            </li>
        </ul>
    </div>
</div>