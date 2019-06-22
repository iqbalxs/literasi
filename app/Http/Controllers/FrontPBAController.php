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
						->paginate(5);
		return view('front.announcements')->with(compact('announcements'));
	}

	//view announcements
	public function announcementView($slug){
		$announcements = MainPost::with('user')->where('category','like','announcement')->where('slug',$slug)->first();

		if ($announcements) {
			$count = $announcements->viewcount;
			$announcements->viewcount = $count+1;
			$announcements->save();
		}

		// select previous post
		$prev = DB::table('main_posts')->select('title','slug')
						->where('category','like','announcement')
						->where('id', '<', $announcements->id)->orderBy('id', 'desc')->first();
    	
		// select next post
		$next = DB::table('main_posts')->select('title','slug')
						->where('category','like','announcement')
						->where('id', '>', $announcements->id)->first();

		return view('front.announcementView')->with(compact('announcements', 'prev', 'next'));
	}

	//view news all
	public function news(){
		$news = MainPost::with('user')
				->where('category','like','news')
				->where('status','=','publish')
				->orderBy('created_at', 'asc')
				->paginate(5);
		return view('front.news')->with(compact('news'));
	}

	//view news
	public function newsView($slug){
		$news = MainPost::with('user')->where('category','like','news')->where('slug',$slug)->first();

		if ($news) {
			$count = $news->viewcount;
			$news->viewcount = $count+1;
			$news->save();
		}

		// select previous post
		$prev = DB::table('main_posts')->select('title','slug')
						->where('category','like','news')
						->where('id', '<', $news->id)->orderBy('id', 'desc')->first();
    	
		// select next post
		$next = DB::table('main_posts')->select('title','slug')
						->where('category','like','news')
						->where('id', '>', $news->id)->first();

		return view('front.newsView')->with(compact('news', 'prev', 'next'));
	}

	//view articles all
	public function articles(){
		$articles = MainPost::with('user')
					->where('category','like','articles')
					->where('status','=','publish')
					->orderBy('created_at', 'asc')
					->paginate(5);
		return view('front.articles')->with(compact('articles'));
	}

	//view articles
	public function articleView($slug){
		$articles = MainPost::with('user')->where('category','like','articles')->where('slug',$slug)->first();

		if ($articles) {
			$count = $articles->viewcount;
			$articles->viewcount = $count+1;
			$articles->save();
		}

		// select previous post
		$prev = DB::table('main_posts')->select('title','slug')
						->where('category','like','articles')
						->where('id', '<', $articles->id)->orderBy('id', 'desc')->first();
    	
		// select next post
		$next = DB::table('main_posts')->select('title','slug')
						->where('category','like','articles')
						->where('id', '>', $articles->id)->first();

		return view('front.articleView')->with(compact('articles', 'prev', 'next'));
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
