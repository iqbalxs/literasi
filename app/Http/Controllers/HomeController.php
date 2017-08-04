<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
      {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('guru')) return $this->guruDashboard();
        if (Laratrust::hasRole('siswa')) return $this->siswaDashboard();
        return view('adminlte::home');
      }
    
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
      
      protected function adminDashboard()
      {
        return view('dashboard.admin');
      }

      protected function guruDashboard()
      {
        return view('dashboard.guru');
      }

      protected function siswaDashboard()
      {
        return view('dashboard.siswa');
      }
}