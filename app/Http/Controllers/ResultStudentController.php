<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultModel;
use App\Models\SubjectModel;
use App\Models\User;
use Auth;

class ResultStudentController extends Controller
{
    public function showResult(){
        $id = Auth::user()->id;
        $data['getRecord'] = ResultModel::getSingle($id);
        $data['getUser'] = User::getSingle($id);
        $data['getSubject'] = SubjectModel::getAllSubjectOfClass($data['getUser']->class);
        return view('student.result.result', $data); 
    }
}
