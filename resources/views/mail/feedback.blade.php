@if (isset($data['client_name']))
    Имя клиента: <b>{{ $data['client_name'] }}</b>
    <br>
@endif
@if (isset($data['client_phone']))
    Телефон клиента: <b>{{ $data['client_phone'] }}</b>
    <br>
@endif