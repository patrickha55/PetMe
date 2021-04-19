<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $comments = Comment::find(auth()->id());
        return view('user.comment.index', compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @throws ValidationException
     */
    public function store(Request $request, $product_review_id)
    {
        $this->validate($request, [
            'body' => 'required|string'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'product_review_id' => $product_review_id,
            'body' => $request->body
        ]);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     */
    public function edit(Comment $comment)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     */
    public function update(Request $request, Comment $comment)
    {
        $this->validate($request, [
            'body' => 'required|string|min:5'
        ]);

        $comment->update([
            'body' => $request->body
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
