<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::get();
        return view('admin.users.users' , [ 'users'=> $users]);
    }

    public function register(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    public function add()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_img = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));

        $users                      = new User();
        $users->user_first_name     = $request->first_name;
        $users->user_last_name      = $request->last_name;
        $users->userttype           = $request->userttype;
        $users->phone               = $request->phone;
        $users->user_photo          = $user_img;
        $users->email               = $request->email;
        $users->password            = Hash::make($request->password);
        $users->save();
        return redirect('login');
    }


    public function save(Request $request)
    {
        $user_img = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));

        $users                      = new User();
        $users->user_first_name     = $request->first_name;
        $users->user_last_name      = $request->last_name;
        $users->userttype           = $request->userttype;
        $users->phone               = $request->phone;
        $users->user_photo          = $user_img;
        $users->email               = $request->email;
        $users->password            = Hash::make($request->password);
        $users->save();
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $user = user::find($id);
        if(! $user){
            redirect('users');
        }
        return view('admin.users.edit', [ 'user'=>$user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_img = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));

        $user                   = user::findOrFail($id);
        $user->user_first_name  = $request->first_name;
        $user->user_last_name   = $request->last_name;
        $user->user_photo       = $user_img;
        $user->email            = $request->email;
        $user->phone            = $request->phone;
        $user->save();
        return redirect('users');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return back()->with('success', 'Category deleted successfully');
    }

}
