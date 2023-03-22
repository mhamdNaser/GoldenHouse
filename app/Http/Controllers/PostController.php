<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Models\comment;
use App\Models\like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts      = post::orderBy('created_at', 'desc')->get();
        $user       = User::get();
        $comment    = comment::get();
        $userlike   = like::get();
        $result = [];
        foreach ($posts as $item) {
            $blog_post = [];
            $blog_post['post_id']       =   $item->id;
            $blog_post['post_user']     =   $item->users_id;
            $blog_post['post_text']     =   $item->post_text;
            $blog_post['post_date']     =   $item->created_at;
            foreach ($user as $us) {
                if ($us->id === $blog_post['post_user']) {
                    $blog_post['user_photo']    =   $us->user_photo;
                    $blog_post['user_fname']    =   $us->user_first_name;
                    $blog_post['user_lname']    =   $us->user_last_name;
                }
            }
            $counter = 0;
            foreach ($comment as $com) {
                if ($com->posts_id === $blog_post['post_id']) {
                    $counter++;
                }
            }

            $blog_post['counter'] =  $counter;
            array_push($result, $blog_post);
        }
        return view('blog', ['posts' => $result, 'user' => $user]);
    }

    public function adminpost()
    {
        $posts      = post::orderBy('created_at', 'desc')->get();
        $user       = User::get();
        $comment   = comment::get();
        $result = [];
        foreach ($posts as $item) {
            $blog_post = [];
            $blog_post['post_id']       =   $item->id;
            $blog_post['post_user']     =   $item->users_id;
            $blog_post['post_text']     =   $item->post_text;
            $blog_post['post_date']     =   $item->created_at;
            foreach ($user as $us) {
                if ($us->id === $blog_post['post_user']) {
                    $blog_post['user_photo']    =   $us->user_photo;
                    $blog_post['user_fname']    =   $us->user_first_name;
                    $blog_post['user_lname']    =   $us->user_last_name;
                }
            }
            $counter = 0;
            foreach ($comment as $com) {
                if ($com->posts_id === $blog_post['post_id']) {
                    $counter++;
                }
            }
            $blog_post['counter'] =  $counter;
            array_push($result, $blog_post);
        }
        return view('admin/Blog/posts', ['posts' => $result]);
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
    public function edit($id)
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
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::findOrFail($id);
        $comments   = comment::get();
        foreach ($comments as $item) {
            if ($item->posts_id === $id) {
                $item->delete();
            }
        }
        $post->delete();
        return back()->with('success', 'Category deleted successfully');

        // $post = post::findOrFail($id);
        // $comments = comment::where('posts_id', $post->id)->get();

        // DB::transaction(function () use ($post, $comments) {
        //     $post->delete();

        //     foreach ($comments as $comment) {
        //         $comment->delete();
        //     }
        // });

        // return back()->with('success', 'Post and all comments have been deleted successfully.');

        // $post = Post::findOrFail($id);

        // // Delete all associated comments
        // $post->comments()->delete();

        // // Delete the post
        // $post->delete();
        // $comments = comment::where('posts_id', $post->id)->get();
    }
}
