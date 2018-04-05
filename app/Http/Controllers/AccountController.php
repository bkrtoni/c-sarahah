<?php

namespace sarahah\Http\Controllers;

use Illuminate\Http\Request;
use sarahah\User;
use sarahah\Message;

class AccountController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth', ['except' => ['show','store']]);
    }

    public function index(){

    	return view('pages.my')
    	->with('title',auth()->user()->name)
    	->with('user',auth()->user());
    }

    public function show($username){

    	$user=User::where('username',$username)->first();
    	if(!$user){
    		return view('pages.notfound')->with('title','404');
    	}
    	return view('pages.show')->with('title','Sarahah - '.$user->name)->with('user',$user);
    }

    public function store(Request $req,$id){

        $this->validate($req,[
            'msg'=>'required'
        ]);

    	$msg=new Message;
    	$msg->user_id=$id;
    	$msg->msg=$req->input('msg');
    	$msg->save();

    	return redirect('../thankyou');	
    }

    public function delete(Request $req)
    {		
    	$msg=Message::find($req->input('msgid'));
    	$msg->delete();
    	return redirect('../messages')->with('success','Message Deleted.');
    }
}
