<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainPost;
use Session;
use DB;

class FrontPBAController extends Controller
{
    //view announcements all
	public function announcements(){
		$announcements = MainPost::with('user')
						->where('category','like','announcement')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(4);
		return view('front.announcements')->with(compact('announcements'));
	}

	//view announcements
	public function announcementView($id){
		$announcements = MainPost::with('user')->where('category','like','announcement')->find($id);

		$count = $announcements->viewcount;
		DB::table('main_posts')
            ->where('id', $id)
            ->update(['viewcount' => $count+1]);

		return view('front.announcementView')->with(compact('announcements'));
	}

	//view news all
	public function news(){
		$news = MainPost::with('user')
				->where('category','like','news')
				->where('status','=','publish')
				->orderBy('created_at', 'asc')
				->paginate(4);
		return view('front.news')->with(compact('news'));
	}

	//view news
	public function newsView($id){
		$news = MainPost::with('user')->where('category','like','news')->find($id);

		$count = $news->viewcount;
		DB::table('main_posts')
            ->where('id', $id)
            ->update(['viewcount' => $count+1]);

		return view('front.newsView')->with(compact('news'));
	}

	//view articles all
	public function articles(){
		$articles = MainPost::with('user')
					->where('category','like','articles')
					->where('status','=','publish')
					->orderBy('created_at', 'asc')
					->paginate(4);
		return view('front.articles')->with(compact('articles'));
	}

	//view articles
	public function articleView($id){
		$articles = MainPost::with('user')->where('category','like','articles')->find($id);

		$count = $articles->viewcount;
		DB::table('main_posts')
            ->where('id', $id)
            ->update(['viewcount' => $count+1]);

		return view('front.articleView')->with(compact('articles'));
	}

	//view beranda - news all
	public function beranda(){
		$news = MainPost::with('user')
				->where('category','like','news')
				->where('status','=','publish')
				->orderBy('created_at', 'asc')
				->limit(4)->get();

		$articles = MainPost::with('user')
					->where('category','like','articles')
					->where('status','=','publish')
					->orderBy('created_at', 'asc')
					->limit(4)->get();

		return view('welcome')->with(compact('news','articles','announcements'));
	}

}
