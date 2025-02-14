<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/img/favicon/favicon.ico">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="/css/fonts.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="/css/modal.css">




    <title>Детальная страничка</title>
</head>
<body>
<header>
    <div class="new-header">
        <div class="">
            <div class="flex">
                <div class="logo-new">
                    <img src="/img/logo.png" alt="">
                    <span>
                            Селективная парфюмерия
                            <br> крупным и мелким оптом
                        </span>
                </div>
                <div class="new-menu">

                </div>
                <div class="contcts">
                    <div class="cont_phone">
                        <div class="viber">

                            <a class="vb-new" href="https://t.me/MiParfumSelecti"><img src="/img/telgrampng.parspng.com-3.png"></a>

                        </div>
                        <div class="whatsapp">
                            <a class="ws-new" href="https://wa.me/79099420595"><img src="/img/new-wa.png"></a>

                        </div>
                        <div class="phonese">
                            <p><a href="tel:+79099420595">+7 (909) 942-05-95</a></p>
                            <div class="emailses">
                            <a href="mailto:zakaz@miparfum.ru">zakaz@miparfum.ru</a>
                            </div>
                        </div>
                    </div>


                </div>



            </div>
            <div class="mobile-phobe"><a href="tel:+79099420595">+7 (909) 942-05-95</a></div>
            <div class="flex-menu">

                <div class="social-flex">
                    <a class="vb-flex" href="https://t.me/MiParfumSelecti"><img src="/img/telgrampng.parspng.com-3.png"></a>
                    <a class="ws-flex" href="https://wa.me/79099420595"><img src="/img/new-wa.png"></a>
                </div>

                <div class="emailses-flex">
                <a href="mailto:zakaz@miparfum.ru">zakaz@miparfum.ru</a>
                </div>
            </div>
            <div class="flex-mobile">


                <img src="/img/logo.png" alt="">



            </div>


        </div>

    </div>


</header>
<style>

    .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 0 0;

        list-style: none;
        background-color: inherit!important;

        margin-top: 10px;
    }
    .breadcrumb-item+.breadcrumb-item {
        padding-left: 0.5rem;
    }


    .ddf h1{
        font-family: 'Proxima Nova';
        font-style: normal;
        font-weight: 600;
        font-size: 22px;
        line-height: 27px;
        text-align: center;
        margin-bottom: 20px;
        letter-spacing: 0.04em;
        width: 100%;
    }
    .ddf input{
        width: 100%;
        height: 50px;
        padding-left: 10px;
        border-radius: 5px;
        background: #ECEEEC;
    }
    .ddf button{
        border: none;
        text-decoration: none;
        margin: 0;
        padding: 0;
        background: none;
    }
    .ddf img{
        height: 80px;
        width: 100%;
        display: block;
        margin: auto;
        margin-top: 10px;
        margin-bottom: 10px;
        cursor: pointer;
    }
    .dfdf{
        font-family: 'Proxima Nova';
        font-style: normal;
        font-weight: 700;
        font-size: 12px;
        line-height: 24px;
        padding-left: 10px;
        letter-spacing: 0.04em;
        color: #242424;
    }
    .primu{
        font-family: 'Proxima Nova';
        font-style: normal;
        font-weight: 300;
        font-size: 14px;
        line-height: 20px;
        text-align: center;

        letter-spacing: 0.04em;

        color: #777777;
    }
    .cd{
        font-family: 'Proxima Nova';
        font-style: normal;
        font-weight: 300;
        font-size: 16px;
        line-height: 24px;
        text-align: center;
        letter-spacing: 0.04em;
        color: #242424;
        width: 100%;
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    .flex-menu{
        display: none;
    }
    .active-menu-flex span:nth-child(1) {
        display: none;
    }
    .active-menu-flex span:nth-child(2){
        top: 0px!important;
        transform: rotate(45deg);
        -webkit-transition: all ease-out 0.5s;
        -moz-transition: all ease-out 0.5s;
        -o-transition: all ease-out 0.5s;
        transition: all ease-out 0.5s;
    }
    .active-menu-flex span:nth-child(3){
        top: 0px!important;
        transform: rotate(-45deg);
        -webkit-transition: all ease-out 0.5s;
        -moz-transition: all ease-out 0.5s;
        -o-transition: all ease-out 0.5s;
        transition: all ease-out 0.5s;
    }
    .social-flex{
        display: flex;
        margin: 0 auto;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        margin-top: 100px;
    }
    .emailses-flex a{
        font-size: 24px;
        text-decoration: none;
        color: #00B1DA;
        text-align: center;
        display: block;
    }
    .vb-flex img{
        height: 51px;
        margin-right: 15px;
    }
    .ws-flex img{
        height: 51px;
    }
    .flex-menu{
        position: absolute;
        width: 100%;
        height: 100vh;
        z-index: 9999;
        /* background: #000; */
        background: rgba(81, 81, 81, 0.8);
        top: 220px;
        /* filter: blur(5px); */
    }
    .form-block__right-bl{
        margin-left: 70px;
    }
    .flex-menu ul{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .flex-menu ul li{
        margin-top: 40px;
    }
    .flex-menu ul a{
        text-decoration: none;
        color: #fff;
        font-size: 34px;
    }
    .mobil-slogan{
        display: none;
    }
    #mobile-cart{
        height: 50px;
        width: 50px;
    }
    .mobile-phobe{
        background: #F2F2F2;
        text-align: center;
        margin: 0 auto;
        padding: 20px;
        display: none;
    }
    .mobile-phobe a{
        text-decoration: none;
        font-size: 24px;
        color: #00B1DA;
    }
    .menu-mobile-new {
        position: relative;
        width: 40px;
    }
    .menu-mobile-new span:nth-child(1) {
        top: -10px;
    }
    .menu-mobile-new span:nth-child(2) {
        top: 10px;
    }
    .flex-mobile img{
        width: 100px;
    }
    .menu-mobile-new span {
        width: 45px;
        height: 3px;
        background: #000;
        position: absolute;


    }
    .price_dowload{
        margin-top: 3%;
        margin-left: 10%;
    }
    .price_dowload img{
        height: 60px;
    }
    .preim{
        display: flex;
        width: 50%;
        margin-left: 10%;
        margin-top: 6%;
    }
    .preim p{
        color: #242424;
        font-weight: 200;
        font-family: system-ui;
        font-size: 18px;
    }
    .preim div {
        width: 245px;
        display: flex;
        flex-direction: column;
        margin-right: 20px;

        align-items: flex-start;
    }
    .preim img{
        height: 80px;
        width: 80px;
        margin-bottom: 10px;
    }
    .top-h1{
        position: relative;
        margin-top: 121px;
        margin-left: 10%;


        display: flex;
        flex-direction: column;
        width: 100%;
    }
    .top-h1 h1{
        font-size: 66px;
        line-height: 66px;
        letter-spacing: 0.04em;
    }
    .top-h1 span{
        font-weight: 600;
    }
    .clror{
        color:#00B1DA;
    }
    .top-h1 p{
        font-size: 18px;
        font-style: normal;
        line-height: 28px;
        letter-spacing: 0.04em;
        color: #242424;
        font-weight: 100;
        font-family: system-ui;
    }
    .top-h1 img{
        height: 6px;
        width: 90px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .vb-new img{
        height: 31px;
        margin-right: 6px;
        margin-top: -3px;
    }
    .ws-new img{
        height: 25px;
        margin-right: 10px;
    }
    .contcts{
        display: flex;
        flex-direction: column;
        align-items: flex-end;

    }
    .cont_phone{
        display: flex;
        justify-content: space-around;

    }
    .phonese a{
        color: #00B1DA;
        text-decoration: none;
        font-size: 22px;

    }
    .phonese{
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    .emailses{
        margin-top: -5px;
    }
    .emailses a{
        text-decoration: none;
        font-size: 12px;
        color: #242424;
    }
    .logo-new{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .logo-new span {
        letter-spacing: 0.04em;
        color: #777777;
        font-size: 14px;
        padding-left: 10px;
    }
    .logo-new img{
        margin-top: 20px;
    }
    .new-menu ul{
        display: flex;
        justify-content: space-between;
    }
    .new-menu ul li{
        margin-right: 15px;

    }
    .new-menu ul li a{
        list-style: none;
        color: #242424;
        text-decoration: none;
    }
    .new-menu ul li a:hover{
        text-decoration: underline;
    }
    .flex{
        display: flex;
        justify-content: space-between;
        width: 100%;
        max-width: 1400px;
        padding: 20px;
        margin: 0 auto;
        align-items: center;
        margin-top: -20px;

    }
    .cart-button {
        width: 60px;
        height: 60px;
        position: fixed;
        top: 40px;
        border: 2px solid #00B1DA;
        border-radius: 50%;
    }
    .new-header{

        width: 100%;
    }

    .vibes{
        font-family: 'Good Vibes Pro', arial;
        font-style: normal;
        font-weight: 400;
        font-size: 150px;
        color: rgba(130, 134, 139, 0.15);
        position: absolute;
        top: 150px;
        left:6%;

    }
    .flex-mobile{
        display: none;
    }
    @media screen and (max-width: 1111px) {
        .new-menu ul{
            flex-direction: column;
        }
        .top-h1 h1{
            font-size: 40px;
            line-height: 40px;
        }
    }
    @media screen and (max-width: 896px) {
        .flex{
            display: none;
        }
        .flex-mobile{
            display: flex;
            JUSTIFY-CONTENT: center;
            ALIGN-ITEMS: center;
            MARGIN-LEFT: 20PX;
            MARGIN-RIGHT: 20PX;
        }
        .mobile-phobe{
            display: block;
        }
        .vibes{
            top:210px;
            font-size: 88px;

            left: 3%;
        }
        .top-h1{
            margin-left: 5%;
            margin-top: 60px;
        }
        .mobil-slogan{
            display: block;
            margin: 0 auto;
            text-align: center;
            margin-top: 10px;
        }
        .preim {
            display: flex;
            width: 100%;
            margin-left: 5%;
            margin-top: 2%;
            flex-direction: column;
        }
        .preim div {
            width: 96%;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .preim img {
            height: 60px;
            width: 60px;
            margin-bottom: 10px;
            margin-right: 15px;
        }
        .top-h1 h1{
            font-size: 35px;
            line-height: 35px;
            letter-spacing: 0.04em;
        }
    }
</style>

    <body>
    <section class="h-100" style="background-color: #eee;">
    <div class="container">

        <div class="row">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">История заказов</li>
                </ol>
            </nav>
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="section-title text-center wow zoomIn">
                    <h1>Добро пожаловать, {{auth()->user()->name}}.</h1>
                    <span> <a href="{{route('logout')}}">(выйти)</a> </span>
                    <p>детальная информация о заказах</p>
                </div>
                </div>
            </div>
        </div>
        @if(isset($orders))
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
        <div class="row">

            <div class="col-md-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @php
                    $i = 1;
                    @endphp
                    @foreach($orders as $order)

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="ider_{{$order['id_order']}}">
                            <h4 class="panel-title">
                                <a  class="@if($i !== 1) collapsed @endif" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$order['id_order']}}" @if($i == 1) aria-expanded="true" @endif aria-expanded="false" aria-controls="collapseOne">
                                    Номер заказа #{{$order['id_order']}} ОТ {{$order['date_order']}}
                                </a>
                            </h4>
                        </div>
                        <div  id="collapse{{$order['id_order']}}" class="panel-collapse collapse @if($i == 1)in @endif" role="tabpanel" aria-labelledby="{{$order['id_order']}}">
                            <div class="panel-body">
                                <ul class="list-group">
                                    @foreach($order['items'] as $item)
                                        <li class="list-group-item list-group-item-secondary">{{$item['name']}} - ({{$item['quantity']}} шт) - {{$item['price']}} ₽</li>
                                    @endforeach

                                </ul>
                                <hr>
                                <div class="alert alert-info">
                                    <strong>сумма заказа: </strong>{{$order['summ']}}
                                </div>

                            </div>
                        </div>
                    </div>
                        @php
                        $i++;
                            @endphp
                    @endforeach
                </div>
            </div><!--- END COL -->

            @else
                <hr>
                <div class="panel panel-default">
                <h2 class="text-center">Заказов пока нет!</h2>
                <a class="text-center show" href="/">Сделать первый заказ</a>
                    <br>
                </div>
            @endif
        </div>
    </div>
        <BR><BR><BR><BR><BR><BR>
        <BR><BR><BR><BR><BR><BR>
        <BR><BR><BR><BR><BR><BR>
    </section>



    <script>
        (function($) {
            'use strict';

            jQuery(document).on('ready', function(){

                $('a.page-scroll').on('click', function(e){
                    var anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $(anchor.attr('href')).offset().top - 50
                    }, 1500);
                    e.preventDefault();
                });

            });


        })(jQuery);
    </script>
    <div class="footer" style="background:#d6d6d6">
        <div class="container">
            <div class="footer__items">
                <div class="logo"><img src="/img/logo.png" alt="" style="
    HEIGHT: 120PX;
"></div>
               <div class="coop">© MiParfum. <?php echo date("Y");?></div>
            </div>
        </div>
    </div>
    <style>
        .template_faq {
            background: #edf3fe none repeat scroll 0 0;
        }
        .panel-group {
            background: #fff none repeat scroll 0 0;
            border-radius: 3px;
            box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
            margin-bottom: 0;
            padding: 30px;
        }
        #accordion .panel {
            border: medium none;
            border-radius: 0;
            box-shadow: none;
            margin: 0 0 15px 10px;
        }
        #accordion .panel-heading {
            border-radius: 30px;
            padding: 0;
        }
        #accordion .panel-title a {
            background: #35AFD7 none repeat scroll 0 0;
            border: 1px solid transparent;
            border-radius: 30px;
            color: #fff;
            display: block;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 20px 12px 50px;
            position: relative;
            transition: all 0.3s ease 0s;
        }
        #accordion .panel-title a.collapsed {
            background: #fff none repeat scroll 0 0;
            border: 1px solid #ddd;
            color: #333;
        }
        #accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
            background: #35AFD7 none repeat scroll 0 0;
            border: 1px solid transparent;
            border-radius: 50%;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
            color: #fff;
            content: "";
            font-family: fontawesome;
            font-size: 25px;
            height: 55px;
            left: -20px;
            line-height: 55px;
            position: absolute;
            text-align: center;
            top: -5px;
            transition: all 0.3s ease 0s;
            width: 55px;
        }
        #accordion .panel-title a.collapsed::after {
            background: #fff none repeat scroll 0 0;
            border: 1px solid #ddd;
            box-shadow: none;
            color: #333;
            content: "";
        }
        #accordion .panel-body {
            background: transparent none repeat scroll 0 0;
            border-top: medium none;
            padding: 20px 25px 10px 9px;
            position: relative;
        }
        #accordion .panel-body p {
            border-left: 1px dashed #8c8c8c;
            padding-left: 25px;
        }
    </style>
    </body>
</html>
