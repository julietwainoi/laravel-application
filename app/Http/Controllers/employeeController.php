<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use app/models;
use App\Models\employee;


class employeeController extends Controller
{
    public function index()
    { 
        return view('employee');
        //return('Hello');
    }
    public function store(Request $request)
    {
       $employee = new employee ;
       $employee->titles = $request->titles;
       $employee->description= $request->description;
       
       $employee ->save();
       return redirect('employee')->with('status', 'employee inserted successfully');


    } 
    
    
}


   