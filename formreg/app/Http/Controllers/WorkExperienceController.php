<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_experience;

class WorkExperienceController extends Controller
{
    public function workexperience(Request $request)
    {
        $workexperience =new work_experience;
        $workexperience->position = $request->position;
        $workexperience->company = $request->company;
        $workexperience->location = $request->location;
        $workexperience->start_date = $request->start_date;
        $workexperience->end_date = $request->end_date;
        $workexperience->still_working = $request->still_working;
        $workexperience->work_description = $request->work_description;
        $workexperience->save();

        // return view('userdetails');
        return redirect('userdetails');
    }

    protected function create(array $workexperience)
    {
        return work_experience::create([
            'position' => $workexperience['position'],
            'company' => $workexperience['company'],
            'location' => $workexperience['location'],
            'start_date' => $workexperience['start_date'],
            'end_date' => $workexperience['end_date'],
            'still_working' => $workexperience['still_working'],
            'work_description' => $workexperience['work_description'],
        ]);
    }
}
