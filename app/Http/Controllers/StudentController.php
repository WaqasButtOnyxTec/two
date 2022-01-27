<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(student $student)
    {

        // $students = student::all();

        $students= student::where('name','waqas')->get();
        dd($students);
        return view('welcome',['students'=> $students]);

    }
}
