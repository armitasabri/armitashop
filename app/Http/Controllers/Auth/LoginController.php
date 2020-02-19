<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Redirect;
use Illuminate\Http\Request;
// use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * 
     * @var string
     */

     
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // $this->middleware('role');
    }

    

    // public function login_post(Request $request )
    // {
       
    //             $user = Auth::user();
                
    //             if ($user->Roles->pluck( 'name' )->contains( 'admin' )) {
    //                 return redirect( '/home2' );
    //             }
                
    //             return redirect( '/dashboard' );
    //         }


    protected function authenticated(Request $request, $user) {
        if ($user->usertype == 1 || $user->usertype == 2  ||  $user->usertype == 3) {
            return redirect('/home2');
        } else {
            return redirect('/home');
        }
   }
       
}
