<?php

namespace App\Http\Controllers;

use App\Models\massage;
use Illuminate\Http\Request;


class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massage = massage::get();
        return view('admin.massage.message', [ 'massage'=>$massage] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $massage = new massage();
        $massage->email = $request->email;
        $massage->title_massage = $request->massage_title;
        $massage->content_massage = $request->message_content;
        $massage->save();
        return view('admin.massage.thanksMassage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function show(massage $massage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function edit(massage $massage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, massage $massage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\massage  $massage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $massage = massage::findOrFail($id);
        $massage->delete();
        return back()->with('success', 'Category deleted successfully');
    }
}
