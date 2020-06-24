<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    //
    function get(){
        $data = Student::all();
        return response()->json([
            "message" => "Success",
            "data" => $data
        ]);
    }

    function post(Request $request){

        $student = new Student;
        $student->nama = $request->nama;
        $student->fakultas = $request->fakultas;
        $student->prodi = $request->prodi;
        $student->save();
        return response()->json([
            "message" => "Success", 
            "data" => $student
        ]);
    }

    function put($id){
        return response()->json([
            "message" => "Put Method Success ". $id
        ]);
    }

    function delete($id){
        return response()->json([
            "message" => "Delete Method Success ". $id
        ]);
    }
}
