<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новый заказ</title>
</head>
<body>
<h1>Новый заказ на сайте Miparfum.ru</h1>

    <p>Имя: {{$orderInfo['user']['name']}}</p>
    <p>Телефон: {{$orderInfo['user']['phone']}}</p>
    <p>Email: {{$orderInfo['user']['email']}}</p>
    <p><b>Cумма заказа: {{$orderInfo['user']['total']}}</b></p>
<hr>
<h3>Состав заказа:</h3>
<ul>
    @foreach($orderInfo['items'] as $items)
            <li>{{$items["name"]}} - ({{$items["quantity"]}} шт) - {{$items["price"]}} ₽</li>
    @endforeach
</ul>
<hr>
</body>
</html>
