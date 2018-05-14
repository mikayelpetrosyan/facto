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
    public function Construction_engineering(){

        return view('Construction_engineering');
    }
    public function Landscape_engineering(){

        return view('Landscape_engineering');
    }
    public function Agricultural_engineering(){

        return view('Agricultural_engineering');
    }
    public function projects(){

        return view('projects');
    }

}
