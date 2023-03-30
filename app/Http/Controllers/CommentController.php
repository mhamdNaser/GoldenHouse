<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\like;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = comment::orderBy('created_at', 'desc')->get();
        $posts = post::get();
        $user =  User::get();
        $result = [];
        foreach($comments as $item ){
                $blog_comment = [];
                $blog_comment['comment_user']      =   $item->users_id ;
                $blog_comment['comment_post']      =   $item->posts_id;
                $blog_comment['comment_text']      =   $item->comment_text;
                $blog_comment['comment_date']      =   $item->created_at;
                foreach ($user as $use){
                    if($use->id === $blog_comment['comment_user']){
                        $blog_comment['user_photo']    =   $use->user_photo;
                        $blog_comment['user_fname']    =   $use->user_first_name;
                        $blog_comment['user_lname']    =   $use->user_last_name;
                    }
                }
                foreach ($posts as $post){
                    if($post->id === $blog_comment['comment_post']){
                        $blog_comment['post_text']    =   $post->post_text;
                    }
                }
                array_push($result,$blog_comment);
        }
        return view('admin/Blog/comment', [ 'comments'=>$result] );
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
        $user                   = Auth::user()->id;
        $comments               = new comment();
        $comments->users_id     = $user;
        $comments->posts_id     = $request->postId;
        $comments->comment_text = $request->comment_content;

        $comments->save();
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =  User::get();
        $posts = post::find($id);
        $comment = comment::orderBy('created_at', 'desc')->get();
        // $counter = 0 ;
        $result = [];
        foreach($comment as $item ){
            if ( $item->posts_id === $posts->id){
                $blog_comment = [];
                $blog_comment['comment_user']      =   $item->users_id ;
                $blog_comment['comment_post']      =   $item->posts_id;
                $blog_comment['comment_text']      =   $item->comment_text;
                $blog_comment['comment_date']      =   $item->created_at;
                foreach ($user as $use){
                    if($use->id === $blog_comment['comment_user']){
                        $blog_comment['user_photo']    =   $use->user_photo;
                        $blog_comment['user_fname']    =   $use->user_first_name;
                        $blog_comment['user_lname']    =   $use->user_last_name;
                    }
                }
                // $counter = where( 'posts_id' , $item->posts_id)->count($comment);
                $counter = Comment::where('posts_id', $item->posts_id)->count();
                $countlike = like::where('posts_id', $item->posts_id)->count();
                array_push($result,$blog_comment);
            }
        }
        return view('singlepost', [ 'comments'=>$result, 'posts'=>$posts, 'count'=>$counter, 'ctlike'=>$countlike ,'comment'=>$comment, 'user'=>$user] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
}
