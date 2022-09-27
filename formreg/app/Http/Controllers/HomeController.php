<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orguser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function contact()
    // {   
    //     if (Gate::allows('individual-only', Auth::user())){
    //         return view('contact');
    //     }else{
    //         return 'you are not an individual';
    //     }
        
    // }

    public function innosubmit()
    {
        return view('innosubmit');
    }

    public function login(Request $request)
    {
        $orguser = orguser::where('email', '=', $request->email)->first();
        if ($orguser) {
            if (hash::check($request->password, $orguser['password'])){
                return redirect('home');
            } else {
                return back()->with('fail', 'Passwords dont match!');
            }
        }   else {
                return back()->with('fail', 'This email is not registerd!');
        }
    }
}
