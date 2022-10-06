<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::paginate(10);
        return view('dashboard.order.index',compact('orders'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        Order::destroy($id);
        session()->flash('delete-order-success','سفارش با موفقیت حذف شد ');
        return back();
    }


    public function invoice($id){
        $cart = Cart::where('basket_id', $id)->first();
        $product = Product::where('id',$cart->product_id)->first();
        $user = User::where('id',$cart->user_id)->first();
        $order = Order::where('basket_id', $id)->first();
        return view('dashboard.order.invoice',compact('product','cart','user','order'));
    }


    public function invoiceStatus($id){
        $order = Order::where('basket_id',$id)->first();
        if($order->delivery == '0'){
            $order->update([
                'delivery' => '1'
            ]);
            session()->flash('send.order','محصول ارسال شد');

        }else{
            session()->flash('send.order','محصول قبلا ارسال شده است ');
        }
        return back();
    }
}
