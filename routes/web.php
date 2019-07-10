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

Route::get('/register-teacher', function () {
    return view('auth.register_teacher');
});

// profile - reset password
Route::get('profile','UserController@profile')->name('profile.show');
Route::patch('/profile/update','UserController@updateProfile')->name('profile.update');
Route::get('/profile/password', 'UserController@editPassword')->name('profile.password');
Route::post('/profile/password', 'UserController@updatePassword')->name('profile.password.update');

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
Route::post('/karya-siswa/rate/{id}', 'FrontKKPController@karyaSiswaRate')->name('student.rate')->middleware('auth');
Route::get('/karya-guru', 'FrontKKPController@karyaGuru');
Route::get('/karya-guru/view/{slug}', 'FrontKKPController@karyaGuruView');
Route::get('/publikasi-ilmiah', 'FrontKKPController@pubIlmiah');
Route::get('/publikasi-ilmiah/view/{slug}', 'FrontKKPController@pubIlmiahView');

Route::group(['prefix'=>'main', 'middleware'=>'auth'], function () {
  /*--------------------------------------------------------------------------
  | ROLE : ADMIN - ADMIN SEKOLAH
  |-------------------------------------------------------------------------- */
  Route::group(['middleware'=>'role:admin|admin-sekolah'], function () {
    Route::resource('announcements', 'AnnouncementsController');
    Route::resource('news', 'NewsController');
    Route::resource('articles', 'ArticlesController');
    
    // route some user management
    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('/user/{id}/verification', 'UserController@verification')->name('user.verification');

    // route verifikasi karya guru
    Route::get('/karya-guru', 'KaryaGuruController@index')->name('karya-guru.index');
    Route::get('/karya-guru/{id}/', 'KaryaGuruController@show')->name('karya-guru.show');
    Route::get('/karya-guru/{id}/verification', 'KaryaGuruController@verification')->name('karya-guru.verification');
    Route::delete('/karya-guru/{id}/destroy', 'KaryaGuruController@verification')->name('karya-guru.destroy');
    
    // route verifikasi publikasi ilmiah
    Route::get('/publikasi-ilmiah', 'PublikasiIlmiahController@index')->name('publikasi-ilmiah.index');
    Route::get('/publikasi-ilmiah/{id}/', 'PublikasiIlmiahController@show')->name('publikasi-ilmiah.show');
    Route::get('/publikasi-ilmiah/{id}/verification', 'PublikasiIlmiahController@verification')->name('publikasi-ilmiah.verification');
    Route::delete('/publikasi-ilmiah/{id}/destroy', 'PublikasiIlmiahController@verification')->name('publikasi-ilmiah.destroy');
  });

  /*--------------------------------------------------------------------------
  | ROLE : ADMIN 
  |-------------------------------------------------------------------------- */
  Route::group(['middleware'=>'role:admin'], function () {

    // contact-us
    Route::get('/pesan', 'ContactUSController@index')->name('pesan.index');
    Route::get('/pesan/{id}', 'ContactUSController@show')->name('pesan.show');

    // user management
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user', 'UserController@store')->name('user.store');
    Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::patch('/user/{id}/update', 'UserController@update')->name('user.update');
    Route::delete('/user/{id}/destroy', 'UserController@destroy')->name('user.destroy');

    //route sp-all
    Route::get('web/kamus-kata', 'AllSPController@dictionary')->name('dictionary');
    Route::post('web/kamus-kata', 'AllSPController@dictionaryUpdate')->name('dictionary.save');
    Route::get('web/faq', 'AllSPController@qna')->name('qna');
    Route::post('web/faq', 'AllSPController@qnaUpdate')->name('qna.save');
    Route::get('web/sambutan', 'AllSPController@greeting')->name('greeting');
    Route::post('web/sambutan', 'AllSPController@greetingUpdate')->name('greeting.save');
    Route::get('web/sejarah', 'AllSPController@history')->name('history');
    Route::post('web/sejarah', 'AllSPController@historyUpdate')->name('history.save');
    Route::get('web/latar-belakang', 'AllSPController@background')->name('background');
    Route::post('web/latar-belakang', 'AllSPController@backgroundUpdate')->name('background.save');
    Route::get('web/struktur-organisasi', 'AllSPController@orgchart')->name('orgchart');
    Route::post('web/struktur-organisasi', 'AllSPController@orgchartUpdate')->name('orgchart.save');
  });

  /*--------------------------------------------------------------------------
  | ROLE : ADMIN, ADMIN SEKOLAH, GURU
  |-------------------------------------------------------------------------- */
  Route::group(['middleware'=>'role:admin|admin-sekolah|guru'], function () {
    // route verifikasi karya siswa
    Route::get('/karya-siswa', 'KaryaSiswaController@index')->name('karya-siswa.index');
    Route::get('/karya-siswa/{id}/', 'KaryaSiswaController@show')->name('karya-siswa.show');
    Route::get('/karya-siswa/{id}/verification', 'KaryaSiswaController@verification')->name('karya-siswa.verification');
    Route::delete('/karya-siswa/{id}/destroy', 'KaryaSiswaController@destroy')->name('karya-siswa.destroy');
  });

  /*--------------------------------------------------------------------------
  | ROLE : GURU 
  |-------------------------------------------------------------------------- */
  Route::group(['middleware'=>'role:guru'], function () {
    Route::resource('m-karya-guru', 'TeacherKGController');
    Route::resource('m-publikasi-ilmiah', 'TeacherPIController');
  
    Route::resource('user-siswa', 'VerifStudentController');
    Route::get('/user-siswa', 'UserSiswaController@index')->name('user-siswa.index');
    Route::get('/user-siswa/{id}/verification', 'UserSiswaController@verification')->name('user-siswa.verification');
  }); 


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
