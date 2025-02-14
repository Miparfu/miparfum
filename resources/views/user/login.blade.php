@extends('user.index')
@section('title', 'Форма авторизации')
@section('description', 'Личный кабинет пользователя на сайте')
@section('content')
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="post" action="{{route('login_process')}}">
    <h3>Вход в личный кабинет</h3>
@csrf
    <label for="username">Email</label>
    <input type="text" placeholder="Ваш email" id="username" @error('email') class="is-invalid" @enderror name="email" value="{{ old('email') }}">
    @error('email')
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
    <label for="password">Пароль</label>
    <input type="password" placeholder="Ваш пароль" id="password" @error('password') class="is-invalid" @enderror name="password" value="{{ old('password') }}">
    @error('password')
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
    <button>Войти</button>
    <a class="reg" href="{{route('register')}}">зарегистрироваться</a>
</form>
<style>
    .reg{
        color: #fff;
        text-align: center;
        margin-top: 20px;
        display: block;
    }
    }
</style>
@endsection


