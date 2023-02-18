<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = category::all();

        return view('home', [
            'categories' => $categories
        ]);
    }
}
