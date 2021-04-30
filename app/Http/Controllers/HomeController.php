<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return view('admin.home.index');
       
    }

    public function index_choose()
    {
        return view('admin.home.index_choose');
       
    }

    public function index_en()
    {
        return view('admin.home.index_en');
    }

}
