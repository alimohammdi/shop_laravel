<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{

  public function  frontProduct(){
      //    send new products
      $products = Product::latest()->paginate(10);

      return view('front.index',compact('products'));
  }
}
