<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubjectModel;
use App\Models\ClassroomModel;
use Auth;

class SubjectController extends Controller
{
    public function list(){
        $data['getRecord'] = SubjectModel::getSubjects();       // getting data 
        return view('admin.subjects.list', $data); 
    }

    public function add(){
        $data['getClasses'] = ClassroomModel::getOnlyClass();
        return view('admin.subjects.add', $data);
    }

    public function edit($id){

        $data['getRecord'] = SubjectModel::getSingle($id);
        $data['getClasses'] = ClassroomModel::getOnlyClass();

        if (!empty($data['getRecord'])){
            return view('admin.subjects.edit', $data);
        } else {
            abort(404);
        }
    }

    public function insert(Request $request){

        // dd($request->all());

        $newSubject = new SubjectModel;
        $newSubject->name = $request->name;
        $newSubject->type = $request->type;
        $newSubject->class = $request->class;
        $newSubject->created_by = Auth::user()->name;
        $newSubject-> save();
        return redirect('admin/subjects/list')->with('success', "Subject Successfully Created");

    }

    public function update($id , Request $request){
        // dd($request->all())

        $updateSubject = SubjectModel::getSingle($id);
        $updateSubject->name = $request->name;
        $updateSubject->type = $request->type;
        $updateSubject->class = $request->class;
        $updateSubject -> save();   
        return redirect('admin/subjects/list')->with('success', "Subject Successfully Updated");
    }

    public function delete($id , Request $request){

        $delSubject = SubjectModel::getSingle($id);
        if($delSubject){
            $delSubject->delete();
            return redirect('admin/subjects/list')->with('success', "Subject Successfully Deleted");
        }
        return false;
    }
}
