<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamModel;
use Auth;

class ExamController extends Controller
{
    public function list(){
        $data['getRecord'] = ExamModel::getAllExams();
        return view('admin.exam.list' , $data); 
    }

    public function add(){
        return view('admin.exam.add');
    }

    public function insert(Request $request){
        // dd($request->all());

        $exam = new ExamModel;
        $exam->exam_month = $request->month;
        $exam->exam_year = $request->year;
        // if($request->type == 1){
        //     $exam->exam_type = $request->type;
        // } else if ($request->type == 2) {
        //     $exam->exam_type = $request->type;
        // } else if ($request->type == 3) {
        //     $exam->exam_type = $request->type;
        // }
        $exam->exam_type = $request->type;
        $exam->created_by = Auth::user()->name;

        $examExist = ExamModel::existingExam( $exam->exam_month , $exam->exam_year , $exam->exam_type);
        if($examExist){
            return redirect()->back()->with('error', "Exam already exists");
        }
        $exam->save();

        return redirect('admin/exam/list')->with('success', "Exam Successfully Added");
    }

    public function delete($id , Request $request){

        $exam = ExamModel::getSingle($id);
        if($exam){
            $exam->delete();
            return redirect('admin/exam/list')->with('success', "Exam Successfully Deleted");
        }
        return false;
    }
}
