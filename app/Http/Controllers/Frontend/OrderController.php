<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // Get User With His Order
        $orders = DB::table('orders')
            ->join('houses', 'orders.house_id', '=', 'houses.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select([
                'orders.id as order_id',
                'orders.status as order_status',
                'houses.id as house_id',
                'orders.*',
                'houses.*',
                'users.*',
                'orders.user_id',
                'houses.image as house_image',
            ])->orderBy('order_id', 'DESC')->where('user_id', '=', $request->user()->id)->get();

        return view('frontend.order.index', compact('orders'));
    }

    public function order_details($id)
    {
        $user_order = Order::find($id);
        return view('frontend.order.view', compact('user_order'));
    }
}

