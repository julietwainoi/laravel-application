<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\employee;
use Illuminate\Http\Request;




class employeeController extends Controller
{

    public function index()
    { 
        $employee= employee::all();
        return response()->json($employee);
        
    }
   public function store(Request $request)
    {
       $employee = new employee ;
       $employee->titles = $request->titles;
       $employee->description= $request->description;
       
       $employee ->save();
       return response()->json(["message"=>"employee added"],201);


    } 
   
    /*public  function get_employees(){
        $employees=employee::orderBy('id','asc',)->get();
        return view("get_employees",['employees'=>$employees]);

    } */
   
   
   
   

    public function show($id)
    {
        $employee = employee::find($id);
       
        if($employee!==null)
        {
            return response()->json($employee);
        }else{
            return response()->json(["message"=>"employee not found"],404);
        }

    }

    public function update(Request $request, $id)
    {
        // Logic to update the employee
        // $request->validate([...]); // You might want to validate the incoming data
        // $employee->update($request->all()); // Example of updating an employee
        if (employee::where ('id',$id)->exists()){
            $employee=employee::find($id);
            $employee->titles= is_null($request->titles) ? $employee->titles:$request->titles;
            $employee->description= is_null($request->description) ? $employee->description:$request->description;
       $employee ->save();
       return response()->json(["message"=>"employee updated"],404);
       
       
        }else{
            return response()->json(["message"=>"employee not found"],404);

        }
    }

    public function destroy($id)
    {
        // Logic to delete the employee
       if (employee::where('id',$id)->exists()){
        $employee =employee::find($id);
        $employee->delete();
        return response()->json(["message"=>"records deleted"],202);
       }else{
        return response()->json(["message"=>"employee not found"],404);
       }
    
}

}
   