@if (isset($data['chem_name']))
    Имя клиента: <b>{{ $data['chem_name'] }}</b>
    <br>
@endif
@if (isset($data['chem_phone']))
    Телефон клиента: <b>{{ $data['chem_phone'] }}</b>
    <br>
@endif