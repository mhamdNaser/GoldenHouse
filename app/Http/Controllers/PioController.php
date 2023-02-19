<?php

namespace App\Http\Controllers;

use App\Models\pio;
use Illuminate\Http\Request;

class PioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pio = pio::get();
        return view('admin.profile', compact('pio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pio = new pio;
        $pio->users_id = $request->pioUser;
        $pio->pio_text = $request->pio_text;
        $pio->save();
        return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pio  $pio
     * @return \Illuminate\Http\Response
     */
    public function show(pio $pio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pio  $pio
     * @return \Illuminate\Http\Response
     */
    public function edit(pio $pio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pio  $pio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pio $pio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pio  $pio
     * @return \Illuminate\Http\Response
     */
    public function destroy(pio $pio)
    {
        //
    }
}
