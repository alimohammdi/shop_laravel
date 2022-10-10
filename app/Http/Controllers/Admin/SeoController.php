<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{

    public function index()
    {
        $seoes = Seo::paginate(10);
        return view('dashboard.seo.index',compact('seoes'));
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
        //
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
        $seo = Seo::findorfail($id);
        return view('dashboard.seo.edite',compact('seo'));
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
       $seo =   $request->validate([
            'title' => 'required',
           'description' => 'required',
           'keywords' => 'required'
        ]);
       Seo::findorfail($id)->update($seo);
        session()->flash('update-seo-success','   با موفقیت آپدیت شد ');
        return redirect()->route('seo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seo::whereid($id)->delete();
        session()->flash('delete-seo-success',' با موفقیت حذف شد');
        return redirect()->route('seo.index');
    }
}
