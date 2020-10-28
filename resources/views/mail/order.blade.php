@if (isset($data['client_name']))
    Имя клиента: <b>{{ $data['client_name'] }}</b>
    <br>
@endif
@if (isset($data['client_phone']))
    Телефон клиента: <b>{{ $data['client_phone'] }}</b>
    <br>
@endif
@if (isset($data['product_name']))
    Имя товара: <b>{{ $data['product_name'] }}</b>
    <br>
@endif
@if (isset($data['product_price']))
    Цена товара: <b>{{ $data['product_price'] }}</b>
    <br>
@endif
@if (isset($data['product_quantity']))
    Количество товара: <b>{{ $data['product_quantity'] }}</b>
    <br>
@endif