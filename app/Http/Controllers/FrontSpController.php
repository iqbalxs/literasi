<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinglePost;
use Session;

class FrontSpController extends Controller
{
    //view dictionary
	public function dictionary(){
		$dictionary = SinglePost::with('user')->find('101');
		return view('front.dictionary')->with(compact('dictionary'));
	}

	//view qna
	public function qna(){
		$qna = SinglePost::find('202');
		return view('front.qna')->with(compact('qna'));
	}

	//view greeting
	public function greeting(){
		$greeting = SinglePost::find('303');
		return view('front.greeting')->with(compact('greeting'));
	}

	//view history
	public function history(){
		$history = SinglePost::find('404');
		return view('front.history')->with(compact('history'));
	}

	//view background
	public function background(){
		$background = SinglePost::find('505');
		return view('front.background')->with(compact('background'));
	}

	//view orgchart
	public function orgchart(){
		$orgchart = SinglePost::find('606');
		return view('front.orgchart')->with(compact('orgchart'));
	}
}
