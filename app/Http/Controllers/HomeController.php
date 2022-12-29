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

    //認証機能(viewを返す)
    public function index()
    {
        return view('home');
    }

    //mainpageを見せる
    public function webpage()
    {
        return view('mainpage.books');
    }
}
