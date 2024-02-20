<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Http\Requests\BlogCommentRequest;
use App\Http\Requests\BlogRequest;
use Response;
use Sentinel;
use Intervention\Image\Facades\Image;
use DOMDocument;
use Illuminate\Http\Request;

class Addstudent extends Controller
{

    public function index(){
        $data = \DB::table('student')
        ->select('*')->get();
        $msg='success';
        $status = 200;
        return response()->json(['data' => $data,'msg' => $msg,'status' => $status]);
    }
    public function find(Request $request){
        $data = \DB::table('student')
        ->select('*')->where('id',$request->id)->get();
        if($data){
            $msg='success';
            $status = 200;
            return response()->json(['data' => $data,'msg' => $msg,'status' => $status]);
        }else{
            $msg='error';
            $status = 200;
            return response()->json(['data' => $data,'msg' => $msg,'status' => $status]);

        }
    }
    public function delete(Request $request){
        $data = \DB::table('student')
        ->select('*')->where('id',$request->id)->delete();
        if($data){
            $msg='success';
            $status = 200;
            return response()->json(['data' => $data,'msg' => $msg,'status' => $status]);

        }else{
            if($data == 0){
                $msg='their is no data';
                $status = 200;
                return response()->json(['data' => $data,'msg' => $msg,'status' => $status]);
        
            }
            
        }
}

    public function store(Request $request){
        $check = \DB::table('student')
        ->where('email',$request->email)
        ->first();
        if($check){
            $msg='user exist already';
            $status = 200;
            return response()->json(['msg' => $msg,'status' => $status]);

        }else{
            $student = Student::create($request->all());
            if($student){
                $msg='success';
                $status = 200;
            }else{
                $msg='error';
            $status = 400;
            }
            return response()->json(['msg' => $msg,'status' => $status]);
        }

    }

}
