<?php

namespace sarahah\Http\Controllers;

use Illuminate\Http\Request;
use sarahah\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use sarahah\Message;

class SettingController extends Controller
{
	function __construct() {
		$this->middleware('auth');

	}

    public function index()	
    {
    	return view('setting.index')->with('title','Sarahah - setting')->with('user',auth()->user());
    }

    public function store(Request $req,$op)
    {
    	$user=auth()->user();
    	if($op=='info'){

    		$this->validate($req,[
			    'name' => 'required',
			    'username' => 'required',
			]);
    		if($user->name!=$req->input('name')){
    			$user->name=$req->input('name');
    		}

    		if($user->username!=$req->input('username'))
    		{
    			if(User::where('username',$req->input('username'))->exists()){
    				return redirect('setting')->with('error','The username is taken.');
    			}
    			$user->username=$req->input('username');
    		}
    		$user->save();
    		return redirect('setting')->with('success','Information saved.');

    	}else if($op=='pass'){
    		$this->validate($req,[
			    'prev' => 'required',
			    'new' => 'required',
			    'con' => 'required'
			]);

    		$p=$req->input('prev');
    		$n=$req->input('new');
    		$c=$req->input('con');

    		if(!Hash::check($p,$user->password)){
    			return redirect('setting/password')->with('error','Wronge password.');
    		}

    		if($n!==$c){
    			return redirect('setting/password')->with('error','Passwords are not match.');
    		}

    		$user->password=bcrypt($n);
    		$user->save();
    		return redirect('setting/password')->with('success','Password changed.');
    	}
    }

    public function pass(){
    	return view('setting.password')->with('title','Sarahah - setting')->with('user',auth()->user());	
    }

    public function del(){
    	return view('setting.delete')->with('title','Sarahah - setting')->with('user',auth()->user());	
    }

    public function delete()
    {
    	$user=auth()->user();
    	Message::where('user_id',$user->id)->delete();
    	if($user->photo!='unknowen.jpg'){
    		Storage::delete('public/photo/'.$user->photo);
    	}
    	Auth::logout();
    	$user->delete();
    	return redirect('../');

    }
}
