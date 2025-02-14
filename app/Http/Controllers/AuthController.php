<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLogin(){
        return view('user.login');
    }

    public function showRegister(){
        return view('user.register');
    }

    public function register(RegisterFormRequest $request){
        $userData = $request->validated();
        $userData['password'] = bcrypt($userData['password']);


        $user = User::create($userData);
        auth('web')->login($user);
        return redirect('/personal')->with('success', "Вы успешно зарегистрировались");
    }

    public function login(LoginFormRequest $request){
        $userData = $request->validated();

        if(Auth::attempt($userData)){
            return redirect('/personal')->with('success', "Вы успешно авторизовались");
        }

        return back()->withErrors([
            'email' => "Данные введены не верно",
        ])->onlyInput('email');


    }

    public function logout(){
        auth()->logout();
        return redirect('/login')->with('success', "Выход завершен");
    }
}
