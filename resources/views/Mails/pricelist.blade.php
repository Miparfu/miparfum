<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Запрос сайта</title>
</head>
<body>
@php
    $contacts['param'] = http_build_query($contacts['param']);
@endphp
@if(!empty($contacts['user-name']))
    <h2>Запрос сайта форма обратной связи</h2><hr />
    <b>ТЕЛЕФОН: </b>{{$contacts['user-form']}}<br>
    <b>ИМЯ: </b> {{$contacts['user-name']}}<br><hr /><br>
    Служебная информация: {{$contacts['param']}}
@else
    <h2>Запрос сайта </h2><hr />
    <b> ТЕЛЕФОН: </b>{{$contacts['phone-ord']}}<br>
    <b> EMAIL: </b>{{$contacts['email-ord']}}<br><hr /><br>
    Служебная информация: {{$contacts['param']}}
@endif

<hr>


</body>
</html>
