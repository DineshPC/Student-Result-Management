<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\ClassroomModel;

class ClassController extends Controller
{
    public function list(){
        $data['getRecord'] = ClassroomModel::getClass();       // getting data 
        return view('admin.classroom.list', $data); 
    }

    public function add(){
        return view('admin.classroom.add');
    }

    public function insert(Request $request){

        // dd($request->all());
        $classroom = new ClassroomModel;
        $classroom-> name = strtoupper(trim($request->name));
        $checkClassroomNameExist = ClassroomModel::checkNameExists($classroom->name); 
        if($checkClassroomNameExist == false){
            $classroom-> created_by = trim(Auth::user()->name);
            $classroom -> save();
            return redirect('admin/classroom/list')->with('success', "classroom Successfully Created");
        }else{
            return redirect()->back()->with('error', "Classroom name already exists");
        }
    }

    public function update($id , Request $request){

        $className = ClassroomModel::getSingle($id);
        $checkClassroomNameExist = ClassroomModel::checkNameExists($request->name); 
        if($checkClassroomNameExist == false){
            $className -> name = strtoupper($request->name);
            $className ->save();
            return redirect('admin/classroom/list')->with('success', "classroom Successfully updated");
        }else{
            return redirect()->back()->with('error', "Classroom name already exists");
        }
    }

    public function edit($id){

        $data['getRecord'] = ClassroomModel::getSingle($id);
        

        if (!empty($data['getRecord'])){
            return view('admin.classroom.edit', $data);
        } else {
            abort(404);
        }
    }

    public function delete($id , Request $request){

        $classroom = ClassroomModel::getSingle($id);
        if($classroom){
            $classroom->delete();
            return redirect('admin/classroom/list')->with('success', "Classroom Successfully Deleted");
        }
        return false;
    }
}
