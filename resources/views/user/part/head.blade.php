<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #f8f9fa!important;
        }
        .background{
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%,-50%);
            left: 50%;
            top: 50%;
        }
        .logo-new img{
            margin-top: 20px;
        }
        .background .shape{
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        .shape:first-child{
            background: linear-gradient(
                #1845ad,
                #23a2f6
            );
            left: -80px;
            top: -80px;
        }
        .shape:last-child{
            background: linear-gradient(
                to right,
                #ff512f,
                #f09819
            );
            right: -30px;
            bottom: -80px;
        }
        form{
            height: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.62);
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;

        }
        form *{
            font-family: 'Poppins',sans-serif;
            color: #000000;
            letter-spacing: 0.5px;
            outline: none;
            border: none;

        }
        form h3{
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
            color: #ffffff;
        }

        label{
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder{
            color: #e5e5e5;
        }
        button{
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        .social{
            margin-top: 30px;
            display: flex;
        }
        .social div{
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255,255,255,0.27);
            color: #eaf0fb;
            text-align: center;
        }
        .social div:hover{
            background-color: rgba(255,255,255,0.47);
        }
        .social .fb{
            margin-left: 25px;
        }
        .social i{
            margin-right: 4px;
        }
body{
    background: url("/img/top-bg-miparfum.jpg");
    background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
}
    </style>
</head>
<header>
    <div class="new-header">
        <div class="">
            <div class="flex">
                <a href="/" style="text-decoration: none;">
                    <div class="logo-new">
                        <img src="/img/logo.png" alt="">
                        <span>
                            Селективная Нишевая парфюмерия
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

