<!DOCTYPE html>
<html>
<head>
    <title>Корзина</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="/css/fonts.min.css">

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



            </div>


        </div>

    </div>


</header>
<style>
    .footer__items {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .coop {
         font-size: 24px;
         color: #FFF;
     }
    .logo {
        max-width: 222px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        word-wrap: break-word;
        margin-left: 10px;
        margin-right: 10px;
    }
    .logo-new img{
        margin-top: 20px;
    }
    img {
        max-width: 100%;
        height: auto;
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
            JUSTIFY-CONTENT: CENTER;
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
@if(cart()->items())
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-sm-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Корзина</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Оформите заказ</h3>
                </div>

                @foreach(cart()->items() as $key => $cart)
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">

                                <div class="col-md-5 col-lg-5 col-xl-5">
                                    <p class="lead fw-normal mb-2">{{$cart['name']}}</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3 d-flex">
                                    <button class="btn btn-link px-2 minus" data-idp="{{$key}}">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input min="1" name="quantity" data-idp="{{$key}}" value="{{$cart['quantity']}}" type="number"
                                           class="form-control form-control-sm form1" />

                                    <button class="btn btn-link px-2 plus" data-idp="{{$key}}">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-4 col-lg-3 col-xl-3 offset-lg-1 d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">{{$cart['price']}}</h5>
                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                        <a href="#!" class="text-danger" data-idp="{{$key}}"><i class="fas fa-trash fa-lg"></i></a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                @endforeach


                <div class="card rounded-3 mb-2">
                    <div class="card-body p-2">
                        <div class="row d-flex justify-content-between align-items-center">

                            <div class="row d-flex justify-content-end align-items-center">
                                <div class="col-12 text-end">
                                    ИТОГО: {{cart()->totals()['Subtotal']}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card mb-4">
                    <div class="card-body p-4 flex-column">
                        <div class="form-outline ">
                            <label class="form-label" for="name">Ваше имя</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg" @if(Auth::user()) value="{{Auth::user()->name}}"  @endif/>

                            <div class="invalid-feedback" id="name_error"></div>
                        </div>
                        <div class="form-outline">
                            <label class="form-label" for="phone">Ваш телефон</label>
                            <input type="text" id="phone" name="phone" class="form-control form-control-lg" @if(Auth::user()) value="{{Auth::user()->phone}}"  @endif/>
                            <div class="invalid-feedback" id="phone_error"></div>
                        </div>
                        <div class="form-outline">
                            <label class="form-label" for="email">Ваш email</label>
                            <input type="text" id="email" class="form-control form-control-lg " @if(Auth::user()) value="{{Auth::user()->email}}"  @endif/>

                            <div class="invalid-feedback" id="email_error"></div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-warning btn-block btn-lg sendOrder">Оформить заказ</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('.sendOrder').on('click', function (e) {
            e.preventDefault();
            let name = $('#name').val();
            let phone = $('#phone').val();
            let email = $('#email').val();

            $('#name').removeClass('is-invalid')
            $('#phone').removeClass('is-invalid')
            $('#email').removeClass('is-invalid')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/cart_ajax',
                data: {
                    'name':name,'phone':phone,'email':email, 'method': 'order'
                },
                success: function (data) {
                    {{session(['success'=>'Заказ успешно оформлен!'])}}
                    location.href = '/personal';

                },
                error: function (jqXhr, json, errorThrown) {
                    let errors = jqXhr.responseJSON;
                    $.each(errors['errors'], function (index, value) {
                        if(index === 'email'){
                            $('#email').addClass('is-invalid')
                            $('#email_error').text(value[0])
                        }
                        if(index === 'name'){
                            $('#name').addClass('is-invalid')
                            $('#name_error').text(value[0])
                        }
                        if(index === 'phone'){
                            $('#phone').addClass('is-invalid')
                            $('#phone_error').text(value[0])
                        }
                    });
                }
            });
        });
        $('.text-danger').on('click', function (e) {
            let id = $(this).data('idp')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: '/cart_ajax',
                data: {
                    'id':id,'method':'del'
                },
                success: function (data) {
                window.location = "/cart"
                },
                error: function (jqXhr) {
                    console.error(jqXhr);
                }
            });
        });

        $(".form1").on('input', function() {
            let id = $(this).data('idp')
            let qu = $(this).val()
            SetQU(id,qu)
        });
    });

    $(".plus").click(function(e) {
        let id = $(this).data('idp')
        var input = parseInt($(this).siblings("input[type=number]").val())
        input = input + 1;
        $(this).siblings(".form1").val(input)
        SetQU(id,input)
    });

    $(".minus").click(function(e) {
        let id = $(this).data('idp')
        var input = parseInt($(this).siblings("input[type=number]").val())
        if(input > 1){
            input = input - 1;
            $(this).siblings(".form1").val(input)
        }
        SetQU(id,input)
    });
    function SetQU(id,qu){
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/cart_ajax',
            data: {
                'id':id,'qu':qu,'method':'qu'
            },
            success: function (data) {
                window.location = "/cart"
            },
            error: function (jqXhr) {
                console.error(jqXhr);
            }
        });
    }
</script>
@else
    <script>window.location = "/";</script>
@endif
<div class="footer" style="background:#d6d6d6">
    <div class="container">
        <div class="footer__items">
            <div class="logo"><img src="/img/logo.png" alt=""></div>
            <div class="coop">© MiParfum. <?php echo date("Y");?></div>
        </div>
    </div>
</div>
</body>
</html>