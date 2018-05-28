<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partners;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function Welcome(){
        $partners = Partners::all();
        return view('welcome',compact('partners'));
    }
}
