<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function add(){

        return view('product.addproduct');
    }

    function insert(Request $req){

        $user = new product();
        $user->name = $req->name;
        $user->quantity = $req->quantity;
        $user->price = $req->price;

        if($user->save()){
            return redirect()->route('product.index');
        }else{
            return redirect()->route('product.add');
        }
    }

    function index(){

        //$users = User::all();
        $users = DB::table('products')->get();

        return view('product.index')->with('users', $users);
    }

    function edit(Request $req, $id){

        //find student form array
        $user = product::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('product.edit')->with('std', $user);
    }

    function update(Request $req, $id){

        $user = product::find($id);
        $user->name = $req->name;
        $user->quantity = $req->quantity;
        $user->price = $req->price;

        $user->save();

        return redirect()->route('product.index');
    }

    function delete($id){

        //find student form array
        $user = product::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        return view('product.delete')->with('std', $user);
    }

    function destroy($id){

        //delete student from array and send the updated array in userlist
        $user = product::find($id);
        if($user->delete()){
            return redirect()->route('product.index');
        }else{
            return view('product.delete')->with('std', $user);;
        }
        //return redirect()->route('student.index');
    }
}
