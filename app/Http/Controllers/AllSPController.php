<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinglePost;
use Session;

class AllSPController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	//view edit dictionary
	public function dictionary(){
		$dictionary = SinglePost::find('101');
		return view('sposts.dictionary.index')->with(compact('dictionary'));
	}

	//save dictionary
	public function dictionaryUpdate(Request $request){
		 $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user_id' => 'required'
      ]);

        $dictionary = SinglePost::find('101');
        $dictionary->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $dictionary->title"
      ]);

      return redirect()->route('dictionary');
	}

	//view edit qna
	public function qna(){
		$qna = SinglePost::find('202');
		return view('sposts.qna.index')->with(compact('qna'));
	}

	//save qna
	public function qnaUpdate(Request $request){
		 $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user_id' => 'required'
      ]);

        $qna = SinglePost::find('202');
        $qna->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $qna->title"
      ]);

      return redirect()->route('qna');
	}

	//view edit greeting
	public function greeting(){
		$greeting = SinglePost::find('303');
		return view('sposts.greeting.index')->with(compact('greeting'));
	}

	//save greeting
	public function greetingUpdate(Request $request){
		 $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user_id' => 'required'
      ]);

        $greeting = SinglePost::find('303');
        $greeting->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $greeting->title"
      ]);

      return redirect()->route('greeting');
	}

	//view edit history
	public function history(){
		$history = SinglePost::find('404');
		return view('sposts.history.index')->with(compact('history'));
	}

	//save history
	public function historyUpdate(Request $request){
		 $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user_id' => 'required'
      ]);

        $history = SinglePost::find('404');
        $history->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $history->title"
      ]);

      return redirect()->route('history');
	}

	//view edit background
	public function background(){
		$background = SinglePost::find('505');
		return view('sposts.background.index')->with(compact('background'));
	}

	//save background
	public function backgroundUpdate(Request $request){
		 $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user_id' => 'required'
      ]);

        $background = SinglePost::find('505');
        $background->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $background->title"
      ]);

      return redirect()->route('background');
	}

	//view edit orgchart
	public function orgchart(){
		$orgchart = SinglePost::find('606');
		return view('sposts.orgchart.index')->with(compact('orgchart'));
	}

	//save orgchart
	public function orgchartUpdate(Request $request){
		 $this->validate($request, [
        'title' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user_id' => 'required'
      ]);

        $orgchart = SinglePost::find('606');
        $orgchart->update($request->all());

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengubah $orgchart->title"
      ]);

      return redirect()->route('orgchart');
	}
}
