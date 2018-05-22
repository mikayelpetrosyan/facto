<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Services;
use App\SubService;

class UserController extends Controller
{
    public function contactUs(){

        return view('contact');
    }
    public function aboutUs(){

        return view('about');
    }
    public  function thisService ($id) {
        $subService = SubService::with('services')->where('services_id', '=', $id)->get();
         if(count($subService) == 0){
             return view('404page');
         }
        return view('this_service',compact('subService'));
    }
    public function projects(){

        return view('projects');
    }

}
