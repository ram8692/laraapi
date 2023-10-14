<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function createEmployee()
    {
        $employee = new Employee();
        $employee->name = 'John';
        $employee->email = 'john.doe';
        $employee->phone_no = '0123456789';
        $employee->gender ='male';
        $employee->age = '11';
        $employee->created_at = now();
        $employee->updated_at = now();
        $employee->save();

        return response()->json(['employee' => $employee], 201);
    }

    public function updateEmployee(){}

    public function deleteEmployee(){}

    public function getEmployee(){}

    public function getEmployees(){}

    public function listEmployees(){}


}
