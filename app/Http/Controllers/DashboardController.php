<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $students = Student::with('majors')->get();
        $majors = Majors::all();
        return view('dashboard', compact('students', 'majors'));
    }
}