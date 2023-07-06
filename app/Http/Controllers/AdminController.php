<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class AdminController extends Controller
{

    public function list(){
        $data['getRecord'] = User::getAdmin();
        return view('admin.admin.list', $data); 
    }


    public function add(){
        return view('admin.admin.add');
    }

    public function insert(Request $request){
        // dd($request->all());
        $data['checkEmailExists'] = User::checkEmailExists($request->email);

        if($data['checkEmailExists'] == false){

        $user = new User;
        $user-> name = trim($request->name);
        $user-> email = trim($request->email);
        $user-> password = Hash::make($request->password);
        $user-> user_type = 1;
        $user-> created_by = trim(Auth::user()->name);
        $user-> save();

        return redirect('admin/admin/list')->with('success', "Admin Successfully Created");

        }else{
            return redirect('admin/admin/add')->with('error', "Email is already in use");
        }
    }

    public function edit($id){

        $data['getRecord'] = User::getSingle($id);

        if (!empty($data['getRecord'])){
            # code..
            return view('admin.admin.edit', $data);
        } else {
            abort(404);
        }
        
    }


    public function update($id , Request $request){

        $user = User::getSingle($id);
            $user-> name = trim($request->name);
            $user-> email = trim($request->email);
            if (!empty($request->password)){
                $user-> password = Hash::make($request->password);
            }
            $user-> save();
            return redirect('admin/admin/list')->with('success', "Admin Successfully Updated");
    }

    public function delete($id , Request $request){

            $user = User::getSingle($id);
            if($user){
                $user->delete();
                return redirect('admin/admin/list')->with('success', "Admin Successfully Deleted");
            }
            return false;
    }
}
