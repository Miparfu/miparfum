<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalController extends Controller
{
    public function index()
    {
        //$orders = Order::where('user_id' '=', auth()->user()->id)->first();
        //dd(auth()->user()->Orders);
        foreach (auth()->user()->Orders as $key => $order) {

            $orders = json_decode($order->items, true);
            $res = array();

            foreach ($orders as $summ) {
                $res[] += $summ['price'] * $summ['quantity'];
            }

            $info[] = [
                "summ" => array_sum($res),
                "id_order" => $order->id,
                "date_order" => $order->created_at->format('d.m.Y H:i:s'),
                'items' => $orders
            ];
            //array_push($orders[$order->id], $order->id, $order->created_at);
            //$orders = array_merge($orders,$info );

        }

        if (!isset($info)) {
            $info = null;
        }

        //$orders = array_push($orders,$order_id);
        return view('user.personal', ["orders" => $info]);
    }
}
