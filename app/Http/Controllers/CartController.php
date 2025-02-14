<?php

namespace App\Http\Controllers;

use App\Mail\NewOrderAdmin;
use App\Mail\PassSendMail;
use App\Mail\PriceOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public $removeAt;

    public function render()
    {
        cart()->refreshAllItemsData();
        // https://github.com/freshbitsweb/laravel-cart-manager справка по пакету
        //$cart = Product::addToCart(100);
       //cart()->clear();
        return view('Product.cart');
        //return response(cart()->toArray(), 200);
       //$cart = cart()->removeAt(0); -- индекс массива с товарами
    }

    public function Detail($id)
    {
        $product = Product::where('slug', $id)->first();
        //dd( $product );
        return view('Product.detail',['product'=>$product,"cart"=>count(cart()->items())]);
    }

    public function ajax(Request $request)
    {
        if($request->input('method') == 'order'){
            $userData = $request->validate([
                'name' => ['required', 'min:3'],
                'phone' => ['required', 'min:10'],
                'email' => ['required', 'email',]

            ], [
                'name.required' => 'Имя не может быть пустым',
                'name.min' => 'Имя не может быть менее 3 символов',
                'phone.required' => 'Телефон не может быть пустым',
                'phone.min' => 'Не верный формат телефона',
                'email.required' => 'Email не может быть пустым',
                'email.email' => 'Email не верный',
            ]);
            $arr = ['sar'=> 12];
            if(!isset(auth()->user()->id)){
                $userFind = User::where('email', '=', $userData['email'])->first();
                $pass = Str::random(10);
                if ($userFind === null) {

                    $userData['password'] = bcrypt($pass);
                    $user = User::create($userData);
                    auth('web')->login($user);
                }else{
                   auth('web')->login($userFind);
                }
                $user = auth()->user();

                Mail::to($user->email)
                    ->send(new PassSendMail(['pass'=> $pass, 'login'=> $user->email]))->cc('zakaz@miparfum.ru');
            }

            $user = auth()->user();
            $order = Order::create(['user_id'=>$user->id,"items"=>json_encode(cart()->items())]);


            $order_info = array('items'=> cart()->items(), 'user'=> ["name"=>$user->name,"phone"=>$user->phone,"email"=>$user->email,"date"=>date('d-m-Y H:i:s'),"total"=>cart()->totals()["Subtotal"]] );
            Mail::to('7535@bk.ru')->cc($user->email)->bcc("zakaz@miparfum.ru")->send(new NewOrderAdmin($order_info));
            cart()->clear();

            // в личный кабинет с уведомлением
            return redirect('/personal')->with('success', 'Заказ № '.$order->id.' успешно создан!');
        }
        if($request->input('method') === 'add'){
            //$name = Product::find('name',$request->input('id'))->first();
            Product::addToCart($request->input('id'));

            return response(count(cart()->items()),200);
        }

        if($request->input('method') === 'del'){
            cart()->removeAt($request->input('id'));

            return response(count(cart()->items()),200);
        }
        if($request->input('method') === 'qu'){
            cart()->setQuantityAt(request('id'), request('qu'));
            return response(count(cart()->items()),200);
        }

        return response(['message'=>'method wrong'],405);
    }

    public function Clear(Request $request)
    {
        if($request->input('clr')){
            cart()->clear();
        }
        return true;
    }

    public function Refresh()
    {
        cart()->refreshAllItemsData();
    }

    public function MailPrice(Request $request)
    {
//dd($request->all());
        Mail::to('7535@bk.ru')
            ->cc("zakaz@miparfum.ru")
            ->bcc("admin@vorlis.ru")
            ->send(new PriceOrder($request->all()));
    }
}
