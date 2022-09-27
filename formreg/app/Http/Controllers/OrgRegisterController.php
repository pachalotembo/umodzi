<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\orguser;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;


class OrgRegisterController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest');
    }

    public function orgregister()
    {
        return view('orgregister');
    }

    public function register_organisation(Request $request)
    {
        $data =new orguser;
        $data->organisation_name = $request->organisation_name;
        $data->organisation_regnum = $request->organisation_regnum;
        $data->country = $request->country;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->gender = $request->gender;
        $data->date = $request->date;
        $data->email = $request->email;
        $data->nationality = $request->nationality;
        $data->representative_country = $request->representative_country; 
        $data->save();

        $data1 =new User;
        $data1->firstname = $request->firstname;
        $data1->email = $request->email;
        $data1->password = Hash::make($request->password);
        $data1->save();

        return view('auth.login');
    }

    // public function login(Request $request)
    // {
    //     $orguser = orguser::where('email', '=', $request->email)->first();
    //     if ($orguser) {
    //         if (hash::check($request->password, $orguser->password)){
    //             return redirect('home');
    //         } else {
    //             return back()->with('fail', 'Passwords dont match!');
    //         }
    //     }   else {
    //             return back()->with('fail', 'This email is not registerd!');
    //     }
    // }

    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\orguser
     */
    protected function create(array $data)
    {
        return orguser::create([
            'organisation_name' => $data['organisation_name'],
            'organisation_regnum' => $data['organisation_regnum'],
            'country' => $data['country'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'gender' => $data['gender'],
            'date' => $data['date'],
            'email' => $data['email'],
            'nationality' => $data['nationality'],
            'representative_country' => $data['representative_country'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

