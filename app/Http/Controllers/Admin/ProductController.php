<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\createProductRequest;
use App\Http\Requests\updateProductRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seo;
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
        $brands = Brand::all();
        return  view('dashboard.product.create',compact('categories','attribute','values','brands'));
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
                'brand_id' => $request->brand,
                'amount' => $request->amount,
                'user_id' => $request->user_id
            ]);
           // create seo post
           if(isset($product) && !empty($request->title_seo) && !empty($request->description_seo)){
               $seo = Seo::create([
                   'title' => $request->title_seo,
                   'description' =>$request->description_seo,
                   'user_id' => $request->user_id,
                   'keywords' => $request->keywords,
                   'product_id' => $product->id
               ]);
           }
           $product->categories()->sync($request['categories']);


//           add attribute product
             foreach($attributeValue as $att_Value){
                 $attributeForValue = explode('-',$att_Value);
                 $product->attributes()->attach($attributeForValue[0],['value_id'=> $attributeForValue[1]]);
             }

        }
       $request->session()->flash('create-product-success','?????????? ???? ???????????? ?????????? ????');
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
        $brands = Brand::all();
        return  view('dashboard.product.edite',compact('product','categories','brands'));
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
           'brand_id' => $request->brand,
           'image' => $image
       ]);
        $product->categories()->sync($request['categories']);
        session()->flash('update-product-success','?????????? ???? ???????????? ?????????? ????');
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $fileImages = Product::FindOrFail($id)->image;
        if(file_exists('images/products/'.$fileImages)){
            unlink('images/products/'.$fileImages);
            Product::destroy($id);
            session()->flash('delete-product-success','?????????? ???? ???????????? ?????? ????');
            return redirect()->route('products.index');
        }else{
            session()->flash('delete-product-error','?????????? ???? ?????? ?????????? ???? ?????? , ???????? ???????????? ???????? ????????');
            return redirect()->route('products.index');
        }
    }
}
