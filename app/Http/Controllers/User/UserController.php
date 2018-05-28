<?php

namespace App\Http\Controllers\User;


use App\Projects;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Flash;
use Illuminate\Support\Facades\Session;
use App\SubService;
use App\ProjectsImages;
use App\Partners;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function Welcome(){
        $partners = Partners::all();
        return view('welcome',compact('partners'));
    }
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

    public function sendContactMessage (Request $request) {
            $this->validate($request, [
                'email' => 'required|email|max:255',
            ]);

        Mail::send('contact.contact', ['request' => $request], function ($m) use($request) {
                    $m->from('margaryanmgrigor@gmail.com','Facto');
                    $m->to($request['your-email'])->subject('New Contact');
                });

//                return redirect()->to('/contact-us')->with(Session::flash('message_successfully', "Please check your email address"));
    }
    public function projects(){
    $projects = Projects::with('projectsImg')->get();
        return view('projects',compact('projects'));
    }
    public function thisProjects($id){
        $projects = ProjectsImages::with('projects')->where('projects_id',$id)->get();
        if(count($projects) == 0){
            return view('404page');
        }
        return view('this_projects',compact('projects'));
    }

}
