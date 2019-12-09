<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function index(){

        //$users = User::all();
        $users = DB::table('users')->get();

    	return view('student.index')->with('users', $users);
    }

    function details($id){

    	//your task finding student from array
        $user = User::find($id);
    	//$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
    	return view('student.details')->with('std', $user);
    }


    function studentList(){
    	return [
    			['id'=>'12-222222-1','username'=>'xyz', 'password'=>'123'],
    			['id'=>'13-222222-2','username'=>'asd', 'password'=>'567'],
    			['id'=>'14-222222-3','username'=>'hjk', 'password'=>'345']
    	];
    }

    function edit(Request $req, $id){

    	//find student form array
        $user = User::find($id);
    	//$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
    	return view('student.edit')->with('std', $user);
    }

	function update(Request $req, $id){

    	$user = User::find($id);
        $user->username = $req->username;
        $user->name = $req->name;
        $user->contact = $req->contact;
        $user->password = $req->password;

        $user->save();

    	return redirect()->route('student.index');
    }
    function delete($id){

    	//find student form array
        $user = User::find($id);
    	//$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
    	return view('student.delete')->with('std', $user);
    }

    function destroy($id){

    	//delete student from array and send the updated array in userlist
        $user = User::find($id);
        if($user->delete()){
                    return redirect()->route('student.index');
                }else{
                    return view('student.delete')->with('std', $user);;
                }
    	//return redirect()->route('student.index');
    }

    function add(){

        return view('student.adduser');
    }

    function insert(Request $req){

        $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = 2;
        $user->name = $req->name;
        $user->contact = $req->contact;

        if($user->save()){
            return redirect()->route('student.index');
        }else{
            return redirect()->route('student.add');
        }
    }
}
