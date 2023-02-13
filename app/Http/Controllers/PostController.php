<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('created_at', 'desc')->get();
        $user = User::get();
        $result = [];
        foreach($posts as $item ){
            $blog_post = [];
            $blog_post['post_id']       =   $item->id;
            $blog_post['post_user']     =   $item->users_id;
            $blog_post['post_text']     =   $item->post_text;
            $blog_post['post_date']     =   $item->created_at;
            array_push($result,$blog_post);
        }
        foreach ($user as $us){
            $blog_post = [];
            $blog_post['user_id']       =   $us->id;
            $blog_post['user_photo']    =   $us->user_photo;
            $blog_post['user_fname']    =   $us->user_first_name;
            $blog_post['user_lname']    =   $us->user_last_name;
            array_push($result,$blog_post);
        }
        dd($result);
        return view('blog' , [ 'posts'=>$result ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $posts = new post();
        $posts->users_id    = $user;
        $posts->post_text   = $request->post_content;

        $posts->save();
        return redirect('blog');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
