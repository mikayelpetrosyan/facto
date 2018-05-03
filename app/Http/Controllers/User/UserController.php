<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function contactUs(){

        return view('contact');
    }
    public function aboutUs(){

        return view('about');
    }
    public function services(){

        return view('services');
    }
    public function projects(){

        return view('projects');
    }

}
