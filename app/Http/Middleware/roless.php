<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Contracts\Auth\Factory as Auth;
use App\Models\users;
use App\Models\roles;
use Illuminate\Support\Facades\Auth;


class roless
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth=auth::check();
        if($auth == false){
            return redirect ('/login');
        }else{
            $user1 = Auth::user()->id;
       $user = users::find($user1);
       $Mainadmin=users::find(21);
       $admin2=users::find(22);
       $admin3=users::find(12);


        if($user->id === $Mainadmin->id){
            
            // return redirect('/home2');
            return $next($request);
        }elseif($user->id===$admin2->id){
            return $next($request);
        //    return redirect('/home2');
        }elseif($user->id===$admin3->id){
            return $next($request);
            //  echo 'hi admin #3';
        }else{
            // abort(403);
            return redirect ('/nopermission');
        }
        
        }

       
    
    
        // if (Auth::check() && Auth::user()->isAdmin() ) {
        //     echo  "This user is Admin";
        //     return $next($request);
        // }elseif(Auth::check()){
        //     echo "This user is NOT Admin";
        // }
        // abort(403);
    }
}
