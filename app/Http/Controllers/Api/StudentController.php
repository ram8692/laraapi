<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function register(Request $request)
    {

    
       // dd(5);
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

      //  dd(5);
        $student = new Student();

        

        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $student->phone_no = isset($request->phone_no) ? $request->phone_no : null;
        $status = $student->save();

        

      return response()->json(['student' => $student], 201);
 
    }

    public function login(Request $request)
    {

    }

    public function logout()
    {
    }

    public function profile()
    {

    }
}