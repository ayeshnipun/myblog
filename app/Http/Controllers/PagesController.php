<?php

namespace TecHour\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use TecHour\Post;
use TecHour\Commentt;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at')->paginate(5);
        return view('pages.blog')->with('posts', $posts);
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
    public function store(Request $request, $post_id)
    {
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
            'email' => 'required'
        ]);

        $post = Post::find($post_id);

        $comment = new Commentt;
        $comment->name = $request->input('name');
        $comment->content = $request->input('content');
        $comment->email = $request->input('email');
        $comment->post()->associate($post);
        $comment->save();

        return redirect('/blog')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('pages.showpost')->with('post',$post);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchPost()
    {
        $key = Input::get('name');
        if($key != null){
            $posts = Post::where('title', 'LIKE', $key.'%')->paginate(5);
            if(count($posts)>0){
                return view('pages.blog')->with('posts',$posts);
            }
            else{
                return view('pages.blog')->with('posts',$posts);
            }
        }else{    
            return redirect('/blog')->with('error', 'No Keyword is given');
        }  
    }
}
