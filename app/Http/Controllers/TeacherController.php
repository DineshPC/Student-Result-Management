<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClassroomModel;
use Hash;
use Auth;

class TeacherController extends Controller
{
    public function listStudent(){
        $data['getRecord'] = User::getStudent();
        return view('teacher.student.list', $data); 
    }

    public function addStudent(){
        $data['getClasses'] = ClassroomModel::getOnlyClass();
        return view('teacher.student.add', $data);
    }

    public function insertStudent(Request $request){
        // dd($request->all());
        $data['checkEmailExists'] = User::checkEmailExists($request->email);

        if($data['checkEmailExists'] == false){

        $user = new User;
        $user-> name = trim($request->name);
        $user-> email = trim($request->email);
        $user-> class = trim($request->class);
        $user-> password = Hash::make($request->password);
        $user-> user_type = 3;
        $user-> created_by = trim(Auth::user()->name);
        $user-> save();

        return redirect('teacher/student/list')->with('success', "Student Successfully Created");

        }else{
            return redirect('teacher/student/add')->with('error', "Email is already in use");
        }
    }

    public function editStudent($id){

        $data['getRecord'] = User::getSingle($id);
        $data['getClasses'] = ClassroomModel::getOnlyClass();
        

        if (!empty($data['getRecord'])){
            # code..
            return view('teacher.student.edit', $data);
        } else {
            abort(404);
        } 
    }

    public function updateStudent($id, Request $request){

        // dd($request->all());

        $user = User::getSingle($id); // Get the user's existing data
        $user->name = trim($request->name); // Set the name
    
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password); // Set the password in Hash format
        }
    
        if ($user->email !== $request->email) {
            // Email has been updated, check if it already exists
            $checkEmail = User::checkEmailExists($request->email); // Check if email already exists
            if ($checkEmail) {
                return redirect()->back()->with('error', "The new email has already been taken");
            }
            $user->email = trim($request->email); // Set the updated email
        }
        $user->class = trim($request->class); 
        $user->save(); // Save the updated user data
        return redirect('teacher/student/list')->with('success', "Student Successfully Updated");
    } 

    public function delete($id , Request $request){

        $user = User::getSingle($id);
        if($user){
            $user->delete();
            return redirect()->back()->with('success', "Successfully Deleted");
        }
        return false;
}
}
