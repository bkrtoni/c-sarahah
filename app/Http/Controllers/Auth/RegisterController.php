<?php

namespace sarahah\Http\Controllers\Auth;

use sarahah\User;
use sarahah\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'photo'=>'image',
            'country' =>'required',
            'birth' =>'required',
            'sex' =>'required',
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
        $user=new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);
        $user->username=$data['username'];
        $user->country=$data['country'];        
        $user->sex=$data['sex'];
        $user->birth=$data['birth'];
        $pname='unknowen.jpg';
        if(isset($data['photo'])){
            $ext=$data['photo']->clientExtension();
            $pname='photo_'.time().'.'.$ext;
            $data['photo']->storeAs('public/photo',$pname);
        }
        $user->photo=$pname;
        $user->save();
        return $user;
    }
}
