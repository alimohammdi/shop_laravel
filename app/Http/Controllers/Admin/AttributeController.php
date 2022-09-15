<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attribute = Attribute::paginate(10);
        return view('dashboard/attribute/index',compact('attribute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/attribute/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Attribute::create($request->all());
        $request->session()->flash('create-attribute-success','افزودن ویژگی موفقیت آمیز بود');
        return back();
    }

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
        $attribute = Attribute::findorfail($id);
        return view('dashboard/attribute/edit-attribute',compact('attribute'));
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
        $request->validate([
            'name' => 'required'
        ]);
        Attribute::findorfail($id)->update($request->all()) ;
        $request->session()->flash('update-attribute-success',',ویرایش ویژگی موفقیت آمیز بود');
        return redirect()->route('attribute.index');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attribute::findorfail($id)->delete();
        session()->flash('delete-attribute-success','حذف دسته بندی موفقیت آمیز بود');
        return back();
    }


    public function getAddValue($id){
         $attribute = Attribute::where('id', $id)->first();
        $values = AttributeValue::where('attribute_id', $id)->get();
        return view('dashboard/attribute/add-values',compact('attribute','values'));
    }

    public function postAddValue(Request $request ){

        $request->validate([
            'value' => 'required'
        ]);
        AttributeValue::create([
         'attribute_id' => $request->attribute_id,
            'value' => $request->value
            ]);

        session()->flash('add-attribute-value-success','اضافه کردن مقدار به ویژگی موفقیت آمیز بود');
        return back();
    }

    public function destroyValue($id){
        AttributeValue::findorfail($id)->delete();
        session()->flash('delete-attribute-value-success','حذف مقدار ویژگی موفقیت آمیز بود');
        return back();
    }
}
