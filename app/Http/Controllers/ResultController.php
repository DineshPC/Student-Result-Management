<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultModel;
use App\Models\SubjectModel;
use App\Models\ClassroomModel;
use App\Models\User;

    
class ResultController extends Controller
{

    public function listResult(){
        $data['getRecord'] = User::getStudent();
        $data['resultAvailable'] = ResultModel::findStudent();
        return view('admin.result.list', $data); 
    }

    public function showStudentResult($id){
        $data['getRecord'] = ResultModel::getSingle($id);
        $data['getSubject'] = SubjectModel::getSubjects();
        $data['getUser'] = User::getSingle($id);
        return view('admin.result.show', $data); 
    }

    public function add(){
        $data['resultAvailable'] = ResultModel::findStudent();
        $data['getClasses'] = ClassroomModel::getOnlyClass();
        $data['getSubjects'] = SubjectModel::getSubjects();
        $data['getStudent'] = User::getStudent();
        return view('admin.result.add', $data);
    }
    public function update(Request $request){

        $student = $request->student;
        $classroom = $request->classroom;
        $data['$getSubjects'] = SubjectModel::getAllSubjectOfClass($classroom);
        $getRecord = User::getSingle($student);
        if($getRecord->class != $classroom){
            return redirect()->back()->with('error', "Student not present in classroom {$classroom}");
        }
        $resultAvailable = ResultModel::findStudent();
        if($resultAvailable->contains('student_id', $student)){
            return redirect()->back()->with('error', "Student result already added.");
        }
        if (($getRecord->class == $classroom) && ($getRecord->id == $student)) {
            return view('admin.result.result', ['getRecord' => $getRecord , 'getSubjects' => $data['$getSubjects']]);
        }        
        return abort(404);
    }

    public function delete($id , Request $request){
        $user = ResultModel::getSingle($id);
        if(!empty($user)){
            return false;
        }
        // dd($user->all());

        foreach($user as $value){
            $value->delete();
        }
            return redirect()->back()->with('success', "Successfully Deleted");
    }
    
    public function upload(Request $request)
    {
        // dd($request->all());


        $newResult = new ResultModel;
        $newResult->student_id = $request->input('student_name');
        $newResult->class_id = $request->input('class_name');

        $student_Id = User::getUserId($newResult->student_id);
        $studentId = $student_Id->first()->id;  
        $class_Id = ClassroomModel::getClassId($newResult->class_id);
        // dd($class_Id->all());   
        $classId = $class_Id->first()->id;  

        
        $obtainMarks = $request->input('obtain_marks');
        $totalMarks = $request->input('total_marks');
        
        $count = count($obtainMarks);
        for ($i = 0; $i < $count; $i++) {
            $result = new ResultModel;
            $result->student_id = $studentId;
            $result->class_id = $classId;
            $result->obtain_marks = $obtainMarks[$i];
            $result->total_marks = $totalMarks[$i];
            $result->subject_id = $i + 1 ;
            $result->save();
        }
        return redirect('admin/result/list')->with('success', "Subject Successfully Created");
    }
    
    

}
