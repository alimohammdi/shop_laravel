<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
           'name' => 'required|string',
           'image' => 'file'
        ]);
         $file = $request->file('image');
         $image = '';
         if(!empty($file)) {
             $image = md5(time()).'.'.$file->getClientOriginalExtension();
             if($image){
                 $file->move('images/brands',$image);
                 $brand = Brand::create([
                    'name' => $request->name,
                    'image' => $image
                 ]);
             }
         }else{
             $brand = Brand::create([
                 'name' => $request->name,
                 'image' => $image
             ]);
         }
         if($brand){
             $request->session()->flash('add-brand','برند با موفقیت اضافه شد');
             return redirect()->route('brand.index');
         }else{
             $request->session()->flash('add-error','مشکلی رخ داد لطفا دوباره تلاش کنید');
             return redirect()->route('brand.index');
         }

        dd($image);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fileImages = Brand::FindOrFail($id)->image;
        if(file_exists('images/brands/'.$fileImages)){
            unlink('images/brands/'.$fileImages);
            Brand::destroy($id);
            session()->flash('delete-brand-success','برند با موفقیت حذف شد');
            return redirect()->route('brand.index');
        }else{
            session()->flash('delete-brand-error','مشکلی در حذف برند رخ داد , لطفا دوباره تلاش کنید');
            return redirect()->route('brand.index');
        }
    }
}
