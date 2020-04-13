<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\Http\Requests;

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
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    
    // protected $guard = 'admin';
    //protected $redirectTo = '/admin/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function create(array $data)
    // {
    //     User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => $data['password'],
    //     ]);
    // }

    // protected function store (request $request)
    // {
    //     $validator = $request->validate([ //validation de la requete
               
    //         'user_name' => 'required'| 'max:255',
    //         'email'=> 'required'| 'max:255',
    //         'passWord' => 'required'|'max:20'
    //         ]);
    
    //         $request = Post::find($user);
    // }

    
}
