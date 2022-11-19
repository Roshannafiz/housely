<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select([
                'orders.*',
                'users.name as user_name',
            ])->get();

        return view('admin.order.index', compact('orders'));
    }

    public function order_view($id)
    {
        $order = DB::table('orders')
            ->join('houses', 'orders.house_id', '=', 'houses.id')
            ->select([
                'orders.*',
                'houses.*',
                'orders.id as order_id',
                'orders.status as order_status',
                'houses.id as house_id',
                'houses.image as house_image',
            ])->where('orders.id', $id)->first();

        return view('admin.order.view', compact('order'));
    }

    public function order_edit($id)
    {
        $order = DB::table('orders')
            ->join('houses', 'orders.house_id', '=', 'houses.id')
            ->select([
                'orders.*',
                'orders.status as order_status',
                'orders.id as order_id',
                'houses.*',
            ])->where('orders.id', $id)->first();

        return view('admin.order.edit', compact('order'));
    }

    public function order_update(Request $request, $id)
    {
        $order_status = Order::find($id);
        $order_status->status = $request->status;
        $order_status->update();
        return redirect()->back()->with('update_message', "Order Status Updated");
    }
}
