<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blogs;
use Illuminate\Support\Facades\Auth;
use Hash;

class FrontendController extends Controller
{
    public function home(){
        $value=0;
        $blogs = Blogs::with('user')->get();
        $data=compact('value', 'blogs');
        return view('home')->with($data);
    }

    public function guestread($id){
        $value=0;
        $blog = Blogs::find($id);

        if (!$blog) {
            return redirect()->route('dashboard')->with('error', 'Blog not found.');
        }

        $data=compact('value', 'blog');
        return view('guestread')->with($data);
    }

    public function about(){
        $value=1;
        $data=compact('value');
        return view('about')->with($data);
    }
    public function contact(){
        $value=2;
        $data=compact('value');
        return view('contact')->with($data);
    }
    public function register(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect("dashboard");
        }
        return redirect()->back()->withInput()->withErrors(['error' => 'User login failed']);
    }

    public function registration(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:users|email',
            'password'=> 'required'
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password) 
        ]);
    
        if ($user) {
            Auth::login($user);
            return redirect("dashboard");
        }
        //return redirect()->back()->withInput()->withErrors(['error' => 'User registration failed']);
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/register');
    }
    
}
