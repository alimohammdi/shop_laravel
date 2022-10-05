<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $products = Cart::with('product')->where('user_id',auth()->user()->id)->get();
        $basket = Basket::where('user_id',auth()->user()->id)->where('isActive',1)->first() ;
        return view('front.cart.cart',compact('products','basket'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $product  = Product::findorfail($request->product_id);
        $basket = Basket::where('user_id',auth()->user()->id)->first() ;
        if(isset($basket)){
            $basket_price = $basket->price ;
            $basket_id = $basket->id;
             Basket::where('user_id',auth()->user()->id)->update([
               'price' =>  $basket_price + $product->price*$request->quantity ,
           ]);
        }else{
          $baskets =  Basket::create([
               'user_id' =>  auth()->user()->id,
               'price'=> $product->price*$request->quantity

           ]);
            $basket_id = $baskets->id;
        }

//        exist product in cart or not
        $product_cart = Cart::where('product_id',$product->id)->where('user_id',auth()->user()->id)->first();

        if( isset($product_cart) ){
             Cart::where('product_id',$product->id)->where('user_id',auth()->user()->id)->update([
                 'quantity' => $product_cart->quantity + $request->quantity
             ]);

        }else{
            Cart::create([
                'user_id' => $request->user_id,
                'product_id' =>$request->product_id,
                'basket_id' => $basket_id,
                'quantity' =>$request->quantity
            ]);
        }
         return back();
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
        $product =  Cart::where('id',$id)->first();
        $basket = Basket::where('user_id' ,auth()->user()->id)->first();
        Basket::where('user_id',auth()->user()->id)->update([
           'price' =>  $basket->price - ($product->quantity * $product->product->price),
        ]);
        Cart::findorfail($id)->delete();
        return back();
    }
}
