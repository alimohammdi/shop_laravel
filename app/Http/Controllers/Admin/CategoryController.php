<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('dashboard/category/index',compact('categories'));
    }

    public function create()
    {
        return view('dashboard/category/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Category::create($request->all());
        $request->session()->flash('create-category-success','افزودن دسته بندی موفقیت امیز بود');
        return back();

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
        Category::findorfail($id)->delete();
        session()->flash('delete-category-success','حذف دسته بندی موفقیت امیز بود');
        return back();
    }
}
