<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="/css/fonts.min.css">
    <link rel="stylesheet" href="/css/main.min.css">
    <link rel="stylesheet" href="/css/modal.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Детальная страничка</title>
</head>
<body>
<header>
    <div class="new-header">
        <div class="">
            <div class="flex">
                <a href="/" style="text-decoration: none;">
                <div class="logo-new">
                    <img src="/img/logo.png" alt="">
                    <span>
                            Селективная парфюмерия
                            <br> крупным и мелким оптом
                        </span>
                </div>
                </a>
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

                <div class="cart-wrap">
                    <div class="cart-button" id="cart-fill">
                        <div class="">
                            <div><a href="{{route('cart')}}"><img src="/img/carts.png" alt=""><span id="mcart" class="cart__icon-count cart-button-quantity">{{$cart}}</span></a></div>
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


                <img src="/img/selective_logo.png" alt="">
                <div style="position: relative;"><a href="{{route('cart')}}"><img id="mobile-cart" src="/img/carts.png" alt=""><span id="mmcart" class="cart__icon-count cart-button-quantity"></span></a></div>


            </div>


        </div>

    </div>


</header>
<style>
    .prod{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-around;
        align-self: stretch;
    }
.advantages__el{
    width: 100%;
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
            JUSTIFY-CONTENT: space-between;
            ALIGN-ITEMS: center;
            margin-top: 40px;
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
    .prod b{
        border-bottom: 1px SOLID #00B1DA;
        padding: 10px;

        WIDTH: 100%;
        MARGIN-BOTTOM: 20PX;

    }
    .price_bl{
        border-top: 1px SOLID #00B1DA;
        display: flex;
        justify-content: space-evenly;
        width: 100%;
        align-items: center;
        font-size: 25px;
        font-weight: bold;
        PADDING: 10PX;
        margin-top: 20px;
    }
    .price_bl button{
        font-size: 18px;
        margin-left: 20px;
    }
    .price_bl img{
        text-align: center;
        margin: 0 auto;
    }
</style>
<section class="h-100" style="background-color: #eee;PADDING: 40PX;">

<div class="container">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
        </ol>
    </nav>

    <div class="card rounded-3 mb-2">
        <div class="card-body p-2">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="col-12 text-start">
                        <h1>{{$product->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card rounded-3 mb-4">
        <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">

                <div class="col-md-6 col-lg-6 col-sm-12 prod" >


                    <b>Артикул: {{$product->api_id}}</b>
                    <img src="{{$product->src}}" alt="">
                    <div class="price_bl">

                        <p>Цена: {{$product->price}} ₽</p>
                        <button type="button" class="btn btn-warning to-cart" data-pid="{{$product->id}}">в корзину</button>
                    </div>


                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="advantages__el">

                    <ul class="advantages__list">
                        <li class="advantages__item">
                            <div class="advantages__icon" style="background-image: url(/img/icon-advantage1.png)"></div>
                            <div class="advantages__text">Работаем напрямую с дистрибьюторами <br>в России, Европе, США и ОАЕ</div>
                        </li>
                        <li class="advantages__item">
                            <div class="advantages__icon" style="background-image: url(/img/icon-advantage2.png)"></div>
                            <div class="advantages__text">Ежедневное обновление прайса</div>
                        </li>
                        <li class="advantages__item">
                            <div class="advantages__icon" style="background-image: url(/img/icon-advantage3.png)"></div>
                            <div class="advantages__text">Гибкая ценовая стратегия</div>
                        </li>
                        <li class="advantages__item">
                            <div class="advantages__icon" style="background-image: url(/img/icon-advantage4.png)"></div>
                            <div class="advantages__text">Быстрое и точное выполнение заказов</div>
                        </li>
                        <li class="advantages__item">
                            <div class="advantages__icon" style="background-image: url(/img/icon-advantage5.png)"></div>
                            <div class="advantages__text">Контроль качества</div>
                        </li>
                        <li class="advantages__item">
                            <div class="advantages__icon" style="background-image: url(/img/icon-advantage6.png)"></div>
                            <div class="advantages__text">Оперативная доставка</div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class="footer" style="background:#d6d6d6">
    <div class="container">
        <div class="footer__items">
            <div class="logo"><img src="/img/logo.png" alt=""></div>
            <div class="coop">© MiParfum. <?php echo date("Y");?></div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", '.to-cart', function(event){
        let id = $(this).data('pid')
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/cart_ajax',
            data: {
                'id':id,'method':'add'
            },
            success: function (data) {
                $('.cart-button-quantity').text(data)
            },
            error: function (jqXhr) {
                console.error(jqXhr);
            }
        });
    });
</script>
</body>
</html>
