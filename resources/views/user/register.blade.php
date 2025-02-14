@extends('user.index')
@section('title', 'Регистрация')
@section('description', 'Регистрация пользователя на сайте')
@section('content')
    <body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{route('register_process')}}" method="post">
        <h3>Регистрация</h3>
        @csrf
        <label for="name">Имя</label>
        <input type="text" placeholder="Ваше имя" id="name" @error('name') class="is-invalid" @enderror name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <label for="phone">Телефон</label>
        <input type="text" placeholder="Ваш телефон" id="phone"  @error('phone') class="is-invalid" @enderror name="phone" value="{{ old('phone') }}">
        @error('phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
        <label for="email">Email</label>
        <input type="text" placeholder="Ваш email" id="email" @error('email') class="is-invalid" @enderror name="email" value="{{ old('email') }}">
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
        <button>Зарегистрироваться</button>
        <a class="reg" href="{{route('login')}}">авторизоваться</a>
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


