<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\dashboard;
use App\Models\category;
use App\Models\User;

class chartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'desc')->get();

        $today_users = User::whereDate('created_at', today())->count();
        $yesterday_users = User::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = User::whereDate('created_at', today()->subDays(2))->count();
        $users_3_days_ago = User::whereDate('created_at', today()->subDays(3))->count();
        $users_4_days_ago = User::whereDate('created_at', today()->subDays(4))->count();
        $users_5_days_ago = User::whereDate('created_at', today()->subDays(5))->count();
        $users_6_days_ago = User::whereDate('created_at', today()->subDays(6))->count();

        $chart = new dashboard();
        $chart->labels(['6 days ago', '5 days ago', '4 days ago', '3 days ago', '2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'line', [$users_6_days_ago, $users_5_days_ago, $users_4_days_ago, $users_3_days_ago, $users_2_days_ago, $yesterday_users, $today_users]);

        return view('admin.index', ['chart' => $chart , 'category' => $category]);
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
        //
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
