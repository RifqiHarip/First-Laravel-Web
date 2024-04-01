<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
            $data = [
                'status'=>200,
                'student'=>$student

            ];
            return response()->json($data,200);
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
        ]);
        if($validator->fails())
        {
            $data =[
                "status"=>422,
                "message"=>$validator->messages()
            ];
            return response()->json($data,422);
        }
        else
        {
            $student = new Student();

            $student->name=$request->name;
            $student->email=$request->email;
            $student->phone=$request->phone;

            $student->save();
            $data = [
                'status'=>200,
                'message'=>'Data sudah terupload ke database',
    
            ];
            return response()->json($data,200);
        }
       
    }
    
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
        ]);
        if($validator->fails())
        {
            $data =[
                "status"=>422,
                "message"=>$validator->messages()
            ];
            return response()->json($data,422);
        }
        else
        {
            $student = Student::find($id);

            $student->name=$request->name;
            $student->email=$request->email;
            $student->phone=$request->phone;

            $student->save();
            $data = [
                'status'=>200,
                'message'=>'Data sudah terupdate ke database',
    
            ];
            return response()->json($data,200);
        }
    }
    public function delete($id)
    {
        $student=Student::find($id);
        $student->delete();
        $data = [
            'status'=>200,
            'message'=>'Data sudah terhapus dari database',

        ];
        return response()->json($data,200);
    }
}
