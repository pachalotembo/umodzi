<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\edu_background;

class UserDetailsController extends Controller
{
    public function userdetails()
    {
        return view('userdetails');
    }
}
