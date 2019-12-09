<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;

use Closure;

class VerifyUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    /*{
        $value = $request->session()->get('id');
        $user = User::find($value);
        $check=$user->type;
        if($check==1)
        {
            return $next($request);
        }else {
            //return redirect()->route('/login');
            //echo("kkk");
            return redirect()->route('home.index');
        }

    }*/
    {
        $value = $request->session()->get('id');
        $user = User::find($value);
        $check=$user->type;
        if($check==1)
        {
            return $next($request);
        }else {
            //return redirect()->route('/login');
            //echo("kkk");
            return redirect()->route('home.index2');
        }

    }

}
