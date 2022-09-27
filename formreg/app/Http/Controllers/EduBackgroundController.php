<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\edu_background;

class EduBackgroundController extends Controller
{
    public function edubackground(Request $request)
    {
        $edubackground =new edu_background;
        $edubackground->highest_qualification = $request->highest_qualification;
        $edubackground->institution = $request->institution;
        $edubackground->location = $request->location;
        $edubackground->start_date = $request->start_date;
        $edubackground->graduation_date = $request->graduation_date;
        $edubackground->not_graduated = $request->not_graduated;
        $edubackground->description = $request->description;
        $edubackground->save();

        // return view('userdetails');
        return redirect('userdetails');
    }

    protected function create(array $edubackground)
    {
        return edu_background::create([
            'highest_qualification' => $edubackground['highest_qualification'],
            'institution' => $edubackground['institution'],
            'location' => $edubackground['location'],
            'start_date' => $edubackground['start_date'],
            'graduation_date' => $edubackground['graduation_date'],
            'not_graduated' => $edubackground['not_graduated'],
            'description' => $edubackground['description'],
        ]);
    }







//     public function store(Request $request){
//         $this->validate($request, [
//             'highest_qualification' => 'required',
//             'institution' => 'required',
//             'location' => 'required',
//             'start_date' => 'required',
//             'graduation_date' => 'required',
//             'graduated' => 'required',
//             'description' => 'required'
//         ]);

//         $edubackground = new edu_background;

//         $edubackground->highest_qualification = $request->input('highest_qualification');
//         $edubackground->institution = $request->input('institution');
//         $edubackground->location = $request->input('location');
//         $edubackground->start_date = $request->input('start_date');
//         $edubackground->graduation_date = $request->input('graduation_date');
//         $edubackground->graduated = $request->input('graduated');
//         $edubackground->description = $request->input('description');

//         $edubackground->save();

//         return redirect('userdetails')->with('success', 'edubackground saved');
//     }

}
