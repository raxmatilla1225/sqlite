<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();

        $students->name = $request->input('name');
        $students->surname = $request->input('surname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);

    }

    public function show()
    {
        $students = Student::all();
        return response()->json($students);

    }
}
