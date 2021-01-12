<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }  

    public function registration()
    {
        return view('admin.auth.registration');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin/');
        }
        return Redirect::to('/admin/login/')->with('Oppes! You have entered invalid credentials');
    }
    
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required|name|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      	
        return Redirect::to('login')->with('Registration Success! Please Login!');
    }
    
    public function dashboard()
    {
      if(Auth::check()){
        $posts_total = DB::table('posts')->select(DB::raw('COUNT(judul)'))->count();
        $category = DB::table('category')->select(DB::raw('COUNT(name)'))->count();
        $tags = DB::table('tags')->select(DB::raw('COUNT(name)'))->count();
        $users = DB::table('users')->select(DB::raw('COUNT(name)'))->count();
        return view('admin.index', compact('posts_total', 'category', 'tags', 'users'));
      }
       return Redirect::to('/admin/login')->with('Opps! You do not have access');
    }

	public function create(array $data)
	{
	  return User::create([
	    'name' => $data['name'],
	    'email' => $data['email'],
	    'password' => Hash::make($data['password'])
	  ]);
	}
	
	public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('/admin/login');
    }
}