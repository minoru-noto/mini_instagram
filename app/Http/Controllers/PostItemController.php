<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostItem;
use App\User;


class PostItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $postItems = PostItem::all();
        $postItems->load('user');
        
        return view('page.postItem.index',[
            'postItems' => $postItems
            ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('page.postItem.create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
        
        $postItem = new PostItem();
        
        $postItem->comment = $request->input('comment');
        $postItem->user_id = $request->input('user_id');


        $fileName = $request->file('img_url')->getClientOriginalName();

        $request->file('img_url')->storeAs('public/image/',$fileName);

        $fullFilePath = '/storage/image/'. $fileName;

        $postItem->img_url = $fullFilePath;
        

        $postItem->save();
        
        return redirect(route('postItem.create'))->with('post_success','投稿しました');
        
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
        //
    }
}
