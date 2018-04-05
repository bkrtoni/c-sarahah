<?php

namespace sarahah\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index(){

		return view('pages.index')->with('title','Sarahah');
	}
	public function about(){

		return view('pages.about')->with('title','Sarahah - about us');
	}

	public function contact(){

		return view('pages.contact')->with('title','Sarahah - contact us');
	}

	public function thank()
	{
		return view('pages.thankyou')->with('title','Sarahah - Thank you.');
	}
}
