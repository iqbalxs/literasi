<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentPost;
use App\TeacherPost;
use willvincent\Rateable\Rating as Rating;
use Session;
use DB;

class FrontKKPController extends Controller
{
    //view karya-siswa all
	public function karyaSiswa(){
		$students = StudentPost::with('user')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(5);
		return view('front.students')->with(compact('students'));
	}

	public function karyaSiswaRate(Request $request, $id){
		$user_id = \Auth::id();
		$students = StudentPost::find($id);

		$rating = new Rating;
		$rating->rating = $request->rate_star;
		$rating->user_id = $user_id;

		$exists = $students->ratings->where('user_id', $user_id)->first();
		
		if ($exists) {
			$exists->delete();
		} 
		
		$students->ratings()->save($rating);

		$students->average_rate = number_format($students->averageRating, 1);
		$students->save();

		return redirect()->back()->with('success', 'Terima Kasih telah berpartisipai dalam memberi rating');
	}

	//view karya-siswa
	public function karyaSiswaView($slug){
		$students = StudentPost::with('user')->where('status','=','publish')->where('slug',$slug)->first();

		if (!$students) {
			return abort(404);
		}

		if ($students) {
			$count = $students->viewcount;
			$students->viewcount = $count+1;
			$students->save();
		}

		// select previous post
		$prev = DB::table('student_posts')->select('title','slug')
						->where('id', '<', $students->id)->orderBy('id', 'desc')->first();
    	
		// select next post
		$next = DB::table('student_posts')->select('title','slug')
						->where('id', '>', $students->id)->first();

		return view('front.studentView')->with(compact('students', 'prev', 'next'));
	}

	 //view karya-guru all
	public function karyaGuru(){
		$teacherkg = TeacherPost::with('user')
						->where('category','=','karya_guru')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(5);
		return view('front.teacherkg')->with(compact('teacherkg'));
	}

	//view karya-guru
	public function karyaGuruView($slug){
		$teacherkg = TeacherPost::with('user')->where('status','=','publish')->where('slug',$slug)->first();

		if (!$teacherkg) {
			return abort(404);
		}

		if ($teacherkg) {
			$count = $teacherkg->viewcount;
			$teacherkg->viewcount = $count+1;
			$teacherkg->save();
		}

		// select previous post
		$prev = DB::table('teacher_posts')->select('title','slug')
						->where('category','=','karya_guru')
						->where('id', '<', $teacherkg->id)->orderBy('id', 'desc')->first();
    	
		// select next post
		$next = DB::table('teacher_posts')->select('title','slug')
						->where('category','=','karya_guru')
						->where('id', '>', $teacherkg->id)->first();

		return view('front.teacherkgView')->with(compact('teacherkg', 'prev', 'next'));
	}

	//view publikasi-ilmiah all
	public function pubIlmiah(){
		$teacherpi = TeacherPost::with('user')
						->where('category','=','publikasi_ilmiah')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(5);
		return view('front.teacherpi')->with(compact('teacherpi'));
	}

	//view publikasi-ilmiah
	public function pubIlmiahView($slug){
		$teacherpi = TeacherPost::with('user')->where('status','=','publish')->where('slug',$slug)->first();

		if (!$teacherpi) {
			return abort(404);
		}

		if ($teacherpi) {
			$count = $teacherpi->viewcount;
			$teacherpi->viewcount = $count+1;
			$teacherpi->save();
		}

		// select previous post
		$prev = DB::table('teacher_posts')->select('title','slug')
						->where('category','=','publikasi_ilmiah')
						->where('id', '<', $teacherpi->id)->orderBy('id', 'desc')->first();
    	
		// select next post
		$next = DB::table('teacher_posts')->select('title','slug')
						->where('category','=','publikasi_ilmiah')
						->where('id', '>', $teacherpi->id)->first();

		return view('front.teacherpiView')->with(compact('teacherpi', 'prev', 'next'));
	}
}
