<?php

namespace App\Http\Controllers;

use App\Models\friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('blog', compact('friend'));
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
        $friend = new friend();
        $friend->user_id = Auth::user()->id;
        $friend->frind_id = $request->id;
        $friend->state = 'pending';

        $friend->save();
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function show(friend $friend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function edit(friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $confriend = friend::where('frind_id', Auth::user()->id)->first();
        if ($confriend) {
            $confriend->state = 'accept';
            $confriend->save();
        }

        $friend = new friend();
        $friend->user_id = Auth::user()->id;
        $friend->frind_id = $request->id;
        $friend->state = 'accept';

        $friend->save();
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the friend record by ID
        $friend     = Friend::where( 'frind_id' , $id)->first();
        if ($friend->state === 'accept') {
            $friend1 = Friend::where( 'user_id' , $id)->first();
            $friend1->delete();
        }
        $friend->delete();

        return redirect('blog');
    }


}
