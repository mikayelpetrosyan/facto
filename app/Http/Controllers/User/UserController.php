<?php

namespace App\Http\Controllers\User;

use App\ShopsImages;
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
use App\Projects;
use App\Shops;
use App\News;


class UserController extends Controller
{

    public function Welcome(){
        $partners = Partners::all();
        $projects = Projects::with('projectsImg')->orderBy('id', 'DESC')->limit(4)->get();
        $news = News::orderBy('id', 'DESC')->limit(4)->get();
        return view('welcome',compact('partners','projects','news'));
    }
    public function contactUs(){
        return view('contact');
    }
    public function aboutUs(){

        return view('about');
    }
    public  function thisService ($id) {
        $subService = SubService::with('services')->where('services_id', '=', $id)->paginate(9);;
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
        $projects = Projects::with('projectsImg')->paginate(9);
        return view('projects',compact('projects'));
    }

    public function thisProjects($id){
        $projects = ProjectsImages::with('projects')->where('projects_id',$id)->get();
        if(count($projects) == 0){
            return view('404page');
        }
        return view('this_projects',compact('projects'));
    }

    public function shops () {
        $shops = Shops::with('shopsImg')->paginate(9);
        return view('shops',compact('shops'));
    }

    public function shop ($id) {
        $shops = ShopsImages::with('shops')->where('shops_id',$id)->get();
        if(count($shops) == 0){
            return view('404page');
        }
        return view('shop',compact('shops'));
    }

    public function news ($id) {
        $news = News::where('id',$id)->get();
        return view('news',compact('news'));
    }

}
