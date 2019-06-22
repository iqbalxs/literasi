<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register-student', function () {
    return view('auth.register_student');
});

// profile - reset password
Route::get('profile','UserController@profile');
Route::patch('/profile/update','UserController@updateProfile');
Route::get('/profile/password', 'UserController@editPassword');
Route::post('/profile/password', 'UserController@updatePassword');

//route front - single post 
Route::get('/kamus', 'FrontSpController@dictionary');
Route::get('/faq', 'FrontSpController@qna');
Route::get('/sambutan', 'FrontSpController@greeting');
Route::get('/sejarah', 'FrontSpController@history');
Route::get('/latar-belakang', 'FrontSpController@background');
Route::get('/struktur-organisasi', 'FrontSpController@orgchart');
Route::get('/contact-us', 'ContactUSController@contactUS');
Route::post('/contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

//route front pba
Route::get('/pengumuman', 'FrontPBAController@announcements');
Route::get('/pengumuman/view/{slug}', 'FrontPBAController@announcementView');
Route::get('/berita', 'FrontPBAController@news');
Route::get('/berita/view/{slug}', 'FrontPBAController@newsView');
Route::get('/artikel', 'FrontPBAController@articles');
Route::get('/artikel/view/{slug}', 'FrontPBAController@articleView');
Route::get('/', 'FrontPBAController@beranda');

//route front kkp
Route::get('/karya-siswa', 'FrontKKPController@karyaSiswa');
Route::get('/karya-siswa/view/{slug}', 'FrontKKPController@karyaSiswaView');
Route::get('/karya-guru', 'FrontKKPController@karyaGuru');
Route::get('/karya-guru/view/{slug}', 'FrontKKPController@karyaGuruView');
Route::get('/publikasi-ilmiah', 'FrontKKPController@pubIlmiah');
Route::get('/publikasi-ilmiah/view/{slug}', 'FrontKKPController@pubIlmiahView');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
  Route::resource('announcements', 'AnnouncementsController');
  Route::resource('news', 'NewsController');
  Route::resource('articles', 'ArticlesController');
  Route::resource('verifkg', 'VerifKGController');
  Route::resource('verifpi', 'VerifPIController');
  Route::resource('verifteacher', 'VerifTeacherController');
  Route::resource('user', 'UserController');
  Route::get('/user/{id}/verification', 'UserController@verification')->name('user.verification');

  //route sp-all
  Route::get('web/dictionary', 'AllSPController@dictionary')->name('dictionary');
  Route::post('web/dictionary', 'AllSPController@dictionaryUpdate');
  Route::get('web/qna', 'AllSPController@qna')->name('qna');
  Route::post('web/qna', 'AllSPController@qnaUpdate');
  Route::get('web/greeting', 'AllSPController@greeting')->name('greeting');
  Route::post('web/greeting', 'AllSPController@greetingUpdate');
  Route::get('web/history', 'AllSPController@history')->name('history');
  Route::post('web/history', 'AllSPController@historyUpdate');
  Route::get('web/background', 'AllSPController@background')->name('background');
  Route::post('web/background', 'AllSPController@backgroundUpdate');
  Route::get('web/orgchart', 'AllSPController@orgchart')->name('orgchart');
  Route::post('web/orgchart', 'AllSPController@orgchartUpdate');
});

Route::group(['prefix'=>'guru', 'middleware'=>['auth', 'role:guru']], function () {
  Route::resource('teacherkg', 'TeacherKGController');
  Route::resource('teacherpi', 'TeacherPIController');
  Route::resource('teacherks', 'TeacherKSController');
  Route::resource('verifstudent', 'VerifStudentController');
});  

Route::group(['prefix'=>'siswa', 'middleware'=>['auth', 'role:siswa']], function () {
  Route::resource('students', 'StudentsController');
});  

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
	//        // Uses Auth Middleware
	//    });
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
