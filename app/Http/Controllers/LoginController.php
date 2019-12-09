<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;

class LoginController extends Controller
{
	public function index(){

		return view('login.index');
	}

	public function verify(Request $req){

		$users = User::all();

		$user = User::where('userId', $req->userId)
					->where('password', $req->password)
					->get();

		/*$user = DB::table('users')->where('username', $req->username)
					->where('password', $req->password)
					->get();*/

		if(count($user) > 0 ){

			$req->session()->put('id', $req->input('userId'));
			return redirect('/home');
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect('/login');
		}
	}

}
