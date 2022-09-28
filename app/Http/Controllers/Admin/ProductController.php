<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
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
        $categories = Category::all();
        $attribute = Attribute::all();
        $values = AttributeValue::all();
        return  view('dashboard.product.create',compact('categories','attribute','values'));
    }


    public function store(createProductRequest $request)
    {
        $attributeValue = $request->attributeValue;

       $file = $request->file('image');
        $image = "";
        if(!empty($file)){
           $image = md5(time()).".".$file->getClientOriginalExtension();
           $file->move('images/products',$image);
           $product = Product::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $image,
                'amount' => $request->amount,
                'user_id' => $request->user_id
            ]);
           $product->categories()->sync($request['categories']);


//           add attribute product
             foreach($attributeValue as $att_Value){
                 $attributeForValue = explode('-',$att_Value);
                 $product->attributes()->attach($attributeForValue[0],['value_id'=> $attributeForValue[1]]);
             }

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
        $categories = Category::all();
        return  view('dashboard.product.edite',compact('product','categories'));
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
       $product = Product::findOrFail($id);
        $product ->update([
           'title' => $request->title,
           'description' => $request->description,
           'price' => $request->price,
           'amount' => $request->amount,
           'image' => $image
       ]);
        $product->categories()->sync($request['categories']);
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
