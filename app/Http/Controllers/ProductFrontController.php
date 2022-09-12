<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
    public function allProducts(){
        $products = Product::latest()->paginate(20);
        return view('front.products.products',compact('products'));
    }


    public function showSingleProduct( Product $product){
        $comment =  $product->comments()->where('approved','1')->get();
        return view('front.products.single-product', compact('product','comment'));
    }


    public function sendComment(Request $request){
        Comment::create([
            'user_id' => $request->user_id,
            'text' => $request->comment,
            'parent_id' => $request->parent_id,
            'commentable_id' => $request->commentable_id,
            'commentable_type' => $request->commentable_type,
        ]);
        return 1;
    }

}
