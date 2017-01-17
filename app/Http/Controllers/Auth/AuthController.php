<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
      public function redirectPath()
        {
            // Logic that determines where to send the user
            if (\Auth::user()->type=='admin') 
            {
                return '/node/85';
            }
            else
            {
                return '/node/72';    
            }
            
        }


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required',
            'first_name'=>'required',
            'last_name'=>'required',                
            'email' => 'required|email|max:255|unique:users',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'zip_code'=>'required',
            'state'=>'required',
            'country'=>'required',
            'status'=>'required',
            'institution'=>'required',
            'department'=>'required',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        \Session::flash('messageset','Successfully Registerd');
        return User::create([
            'title' =>$data['title'],
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'], 
            'email'=>$data['email'],
            'phone'=>$data['phone'],
            'address'=>$data['address'],
            'city'=>$data['city'],
            'zip_code'=>$data['zip_code'],
            'state'=>$data['state'],
            'country'=>$data['country'],
            'status'=>$data['status'],
            'institution'=>$data['institution'],
            'department'=>$data['department'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
