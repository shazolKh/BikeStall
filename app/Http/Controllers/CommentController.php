<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'comment'=>'required'
        ]);

        $comment = new Comment();
        $comment->bike_id = $id;
        $comment->writer = $request->name;
        $comment->comment = $request->comment;

        $comment->save();

        //return response()->json($comment);
        return redirect()->back()->with('flash_message_success', 'Your Comment is sent for Admin Review!');
    }

    public function showComments()
    {
        $allcomments = Comment::where(['status'=>'0'])->get();
        return view('admin.comments.all_comments')->with(compact('allcomments'));
    }

    public function deleteComments($id=null)
    {
        Comment::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error', 'Comment/Review has been Deleted');
    }

    public function publishComments(Request $request, $id=null)
    {
        $comment = Comment::where(['id'=>$id])->first();
        $comment->status=1;
        $comment->save();

        return redirect()->back()->with('flash_message_success', 'Comment/Review has been Published');
    }
}
