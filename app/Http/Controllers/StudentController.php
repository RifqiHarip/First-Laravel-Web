<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class StudentController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/student",
     *      tags={"Student"},
     *      summary="Get student data",
     *      description="Get student data from laravel-eight mysql database",
     *      operationId="student",
     *      @OA\Response(
     *          response="default",
     *          description="return student array model"
     *       )
     *  )
     */
    public function index()
    {
        $student = Student::all();
            $data = [
                'status'=>200,
                'student'=>$student

            ];
            return response()->json($data,200);
    }
    
    /**
     * @OA\Post(
     *      path="/api/student",
     *      tags={"Student"},
     *      summary="Add student data",
     *      description="Post student data to laravel-eight mysql database",
     *      operationId="student/store",
     *      @OA\RequestBody(
     *          required=true,
     *          description="Student form",
     *          @OA\JsonContent(
     *              required={"name","email"},
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="email", type="string"),
     *              @OA\Property(property="phone", type="string"),
     *              ),
     *          ),
     *      @OA\Response(
     *          response="default",
     *          description="Add student data to the database"
     *          )
     *  )
     */
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
