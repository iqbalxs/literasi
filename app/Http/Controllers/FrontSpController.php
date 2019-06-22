<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinglePost;
use Session;

class FrontSpController extends Controller
{
    //view dictionary
	public function dictionary(){
		$data = SinglePost::with('user')->find('101');

		$additional = [
			'title' => 'Kamus Kata'
		];

		return view('front.single-page')->with(compact('data', 'additional'));
	}

	//view qna
	public function qna(){
		$data = SinglePost::find('202');

		$additional = [
			'title' => 'FAQ'
		];

		return view('front.single-page')->with(compact('data', 'additional'));
	}

	//view greeting
	public function greeting(){
		$data = SinglePost::find('303');

		$additional = [
			'title' => 'Sambutan'
		];

		return view('front.single-page')->with(compact('data', 'additional'));
	}

	//view history
	public function history(){
		$data = SinglePost::find('404');

		$additional = [
			'title' => 'Sejarah'
		];

		return view('front.single-page')->with(compact('data', 'additional'));
	}

	//view background
	public function background(){
		$data = SinglePost::find('505');

		$additional = [
			'title' => 'Latar Belakang'
		];

		return view('front.single-page')->with(compact('data', 'additional'));
	}

	//view orgchart
	public function orgchart(){
		$data = SinglePost::find('606');

		$additional = [
			'title' => 'Struktur Organisasi'
		];

		return view('front.single-page')->with(compact('data', 'additional'));
	}
}
