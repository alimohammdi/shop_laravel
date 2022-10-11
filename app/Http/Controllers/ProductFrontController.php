<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Models\Seo;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
    public function allProducts(){
        $products = Product::latest()->paginate(10);
        return view('front.products.products',compact('products'));
    }


    public function showSingleProduct(Product $product){
        $comment =  $product->find($product->id)->comments()->where('approved','1')->get();
        $seo = Seo::where('product_id', $product->id)->first();

        if($seo){
            $this->seo()->setTitle($seo->title)
                ->setDescription($seo->description);
        }else{
            $this->seo()->setTitle($product->title);
        }
        return view('front.products.single-product', compact('product','comment'));
    }


    public function sendComment(Request $request){
        $request->validate([
           'user_id' => 'required',
           'comment' => 'required'
        ]);
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
