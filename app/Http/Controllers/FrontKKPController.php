<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentPost;
use App\TeacherPost;
use Session;
use DB;

class FrontKKPController extends Controller
{
    //view karya-siswa all
	public function karyaSiswa(){
		$students = StudentPost::with('user')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(4);
		return view('front.students')->with(compact('students'));
	}

	//view karya-siswa
	public function karyaSiswaView($id){
		$students = StudentPost::with('user')->where('status','=','publish')->find($id);

		$count = $students->viewcount;
		DB::table('student_posts')
            ->where('id', $id)
            ->update(['viewcount' => $count+1]);

		return view('front.studentView')->with(compact('students'));
	}

	 //view karya-guru all
	public function karyaGuru(){
		$teacherkg = TeacherPost::with('user')
						->where('category','=','karya_guru')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(4);
		return view('front.teacherkg')->with(compact('teacherkg'));
	}

	//view karya-guru
	public function karyaGuruView($id){
		$teacherkg = TeacherPost::with('user')->where('status','=','publish')->find($id);

		$count = $teacherkg->viewcount;
		DB::table('teacher_posts')
            ->where('id', $id)
            ->update(['viewcount' => $count+1]);

		return view('front.teacherkgView')->with(compact('teacherkg'));
	}

	//view publikasi-ilmiah all
	public function pubIlmiah(){
		$teacherpi = TeacherPost::with('user')
						->where('category','=','publikasi_ilmiah')
						->where('status','=','publish')
						->orderBy('created_at', 'asc')
						->paginate(4);
		return view('front.teacherpi')->with(compact('teacherpi'));
	}

	//view publikasi-ilmiah
	public function pubIlmiahView($id){
		$teacherpi = TeacherPost::with('user')->where('status','=','publish')->find($id);

		$count = $teacherpi->viewcount;
		DB::table('teacher_posts')
            ->where('id', $id)
            ->update(['viewcount' => $count+1]);

		return view('front.teacherpiView')->with(compact('teacherpi'));
	}
}
