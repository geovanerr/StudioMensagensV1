<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *  @r eturn void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     *@r eturn \Illuminate\Contracts\Support\Renderable
     */
   // public function index()
   public function index()
    {
        
        return view('Home.index');
    }
}
