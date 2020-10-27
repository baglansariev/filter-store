@if (isset($data['name']))
    Имя клиента: <b>{{ $data['name'] }}</b>
    <br>
@endif
@if (isset($data['phone']))
    Телефон клиента: <b>{{ $data['phone'] }}</b>
    <br>
@endif
@if (isset($data['source']))
    Источник водоснабжения: <b>{{ $data['source'] }}</b>
    <br>
@endif
@if (isset($data['object_type']))
    Тип объекта: <b>{{ $data['object_type'] }}</b>
    <br>
@endif
@if (isset($data['problem_type']))
    Проблема: <b>{{ $data['problem_type'] }}</b>
    <br>
@endif
@if (isset($data['sanuzel']))
    Количество санузлов: <b>{{ $data['sanuzel'] }}</b>
    <br>
@endif
@if (isset($data['people_count']))
    Количество жителей: <b>{{ $data['people_count'] }}</b>
    <br>
@endif
@if (isset($data['canaliztion']))
    Тип канализации: <b>{{ $data['canaliztion'] }}</b>
    <br>
@endif
@if (isset($data['living_type']))
    Тип проживания: <b>{{ $data['living_type'] }}</b>
    <br>
@endif
@if (isset($data['warming_type']))
    Тип отопления: <b>{{ $data['warming_type'] }}</b>
    <br>
@endif
@if (isset($data['max_sum']))
    Клиент расчитывает на сумму: <b>{{ $data['max_sum'] }}</b>
    <br>
@endif