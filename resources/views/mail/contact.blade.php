@if (isset($data['name']))
    Имя клиента: <b>{{ $data['name'] }}</b>
    <br>
@endif
@if (isset($data['email']))
    E-mail клиента: <b>{{ $data['email'] }}</b>
    <br>
@endif
@if (isset($data['subject']))
    Тема сообщения: <b>{{ $data['subject'] }}</b>
    <br>
@endif
@if (isset($data['message']))
    Текст сообщения: <b>{{ $data['message'] }}</b>
    <br>
@endif