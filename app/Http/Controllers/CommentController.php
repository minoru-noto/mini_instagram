<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\PostItem;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request);
        
        $comments = new Comment();
        
        $comments->content = $request->input('content');
        $comments->user_id = $request->input('user_id');
        $comments->post_item_id = $request->input('post_item_id');
        $comments->save();
        
        return redirect(route('comment.show',$request->post_item_id));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        
        $comments = Comment::where('post_item_id',$id)->get();
        $comments->load('user');
        
        $postItem = PostItem::where('id',$id)->first();
        
        return view('page.comment.show',[
                'id' => $id,
                'comments' => $comments,
                'postItem' => $postItem
            ]);
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
        //
    }
}
