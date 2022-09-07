<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(5);
        return view('dashboard.product.index',compact('product'));
    }

    public function create()
    {
        return  view('dashboard.product.create');
    }


    public function store(createProductRequest $request)
    {
       $file = $request->file('image');
        $image = "";
        if(!empty($file)){
           $image = md5(time()).".".$file->getClientOriginalExtension();
           $file->move('images/products',$image);
            Product::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $image,
                'amount' => $request->amount,
                'user_id' => $request->user_id
            ]);
        }
       $request->session()->flash('create-product-success','محصول با موفقیت اضافه شد');
       return redirect()->route('products.index');

     }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::FindOrFail($id)->first();
        return  view('dashboard.product.edite',compact('product'));
    }

    public function update(updateProductRequest  $request, $id)
    {
       $newImage = $request->file('image');
       if(!empty($newImage)){
           $lastImage = Product::FindOrFail($id)->image;
           if(file_exists('images/products/'.$lastImage)){
                  unlink('images/products/'.$lastImage);
            }
           $image = md5(time()).".".$newImage->getClientOriginalExtension();
           $newImage->move("images/products",$image);
       }else{
           $image = Product::FindOrFail($id)->image;
    }
       Product::findOrFail($id)->update([
           'title' => $request->title,
           'description' => $request->description,
           'price' => $request->price,
           'amount' => $request->amount,
           'image' => $image
       ]);

        session()->flash('update-product-success','محصول با موفقیت آپدیت شد');
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $fileImages = Product::FindOrFail($id)->image;
        if(file_exists('images/products/'.$fileImages)){
            unlink('images/products/'.$fileImages);
            Product::destroy($id);
            session()->flash('delete-product-success','محصول با موفقیت حذف شد');
            return redirect()->route('products.index');
        }else{
            session()->flash('delete-product-error','مشکلی در حذف محصول رخ داد , لطفا دوباره تلاش کنید');
            return redirect()->route('products.index');
        }
    }
}
