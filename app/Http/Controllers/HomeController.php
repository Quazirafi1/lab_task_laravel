<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;


class HomeController extends Controller
{
    function index(Request $request){


        $value = $request->session()->get('id');

        $user = User::find($value);

    	if($request->session()->has('id')){
    		//$users = User::all();
            //$kangaroo=session('id')
            //echo "kasmd";
    		//$user = User::where('userId', $kangaroo)
            //       					->get();
            $usernamesend=$user->username;
    		return view('home.index', compact('id','usernamesend'));
    	}else{
    		return redirect('/login');
    	}

    }
    function index2(Request $request){


        $value = $request->session()->get('id');

        $user = User::find($value);

        if($request->session()->has('id')){
            //$users = User::all();
            //$kangaroo=session('id')
            //echo "kasmd";
            //$user = User::where('userId', $kangaroo)
            //       					->get();
            $usernamesend=$user->username;
            return view('home.index2', compact('id','usernamesend'));
        }else{
            return redirect('/login');
        }

    }
}





