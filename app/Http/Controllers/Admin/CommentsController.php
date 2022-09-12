<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comment = Comment::paginate(10);
        return view('dashboard.comment.index',compact('comment'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $comment = Comment::findorfail($id);
        return view('dashboard.comment.showComment',compact('comment'));
    }

    public function edit($id)
    {
        $status =  Comment::findorfail($id)->approved;
        if($status == 0){
            Comment::findorfail($id)->update([
                'approved' => '1'
            ]);
        }else{
            Comment::findorfail($id)->update([
                'approved' => '0'
            ]);
        }
        return  back();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Comment::findorfail($id)->delete();
        session()->flash('delete-comment-success', 'حذف کامنت موفقیت آمیز بود');
        return back();
    }


}
