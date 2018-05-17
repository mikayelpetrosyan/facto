<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\App;
use App\Dlink;
use Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader;
use Yajra\Datatables\Datatables;
use App\Services;
use App\SubService;

class AppController extends Controller
{
    public function appsForm(){
        $subcategories = SubCategory::all();
        return view('add_app', compact('subcategories'));
    }

    public function serviceForm () {
        return view('add_service');
    }

    public function addService (Request $request){
        $service = new Services([
            'name_en' => $request->name_en,
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
        ]);
        $service->save();

        return redirect()->back()->with('status', 'App successfully added');

    }

    public function subserviceForm () {
        $services = Services::all();
        return view('add_subservice', compact('services'));
    }

    public function addsubService (Request $request){
        if($request->method("post")){
            $subcategory = Services::find($request->services_id);
            if ($request->hasFile('img')) {
                $originalName = $request->img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if($request->img->storeAs('public/upload', $generatedName) ){
                    $request->img = $generatedName;
                };
            }
            $subService = new SubService([
                'services_id' => $request->services_id,
                'title_en' => $request->title_en,
                'title_am' => $request->title_am,
                'title_ru' => $request->title_ru,
                'description_en' => $request->description_en,
                'description_am' => $request->description_am,
                'description_ru' => $request->description_ru,
                'img' => $request->img,

            ]);
            $subService->save();

            return redirect()->back()->with('status', 'App successfully added');

        }

    }

    public function addApps(Request $request){
        if($request->method("post")){
            $subcategory = SubCategory::find($request->subcategoryid);
            if ($request->hasFile('img')) {
                $originalName = $request->img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if($request->img->storeAs('public/upload', $generatedName) ){
                    $request->img = $generatedName;
                };
            }
            $app = new App([
                'sub_category_id' => $request->subcategoryid,
                'title' => $request->title,
                'description' => $request->description,
                'img' => $request->img,
                'info' => $request->info,
                'color' => $request->color,
                'manufacturer' => $request->manufacturer,
                'manufactur_country' => $request->manufactur_country,
                'manual' => $request->manual,
                'weight' => $request->weight,
                'mode_application' => $request->mode_application,
                'price' => $request->price
            ]);
            $app->save();

            return redirect()->back()->with('status', 'App successfully added');

        }
    }

    public function allApps(){
        return view('all_apps', compact('apps'));
    }

    public function anyData(){
        $apps = App::with(['sub_categories.categories'])->get();
        return Datatables::of($apps)
            ->addColumn('action', function ($apps) {
                return '<a href="'. route('apps_edit_form',  $apps->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="'. route('apps_delete',  $apps->id).'" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
            })->make(true);

    }

    public function editAppsForm($id){
        $app = App::find($id)->first()->toArray();
        $subcategorys = SubCategory::all();
        return view('edit_app',compact('subcategorys','app','id'));
    }

    public function editApps(Request $request, $id){
        if ($request->hasFile('img')) {
            $originalName = $request->img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if($request->img->storeAs('public/upload', $generatedName) ){
                $request->old_img = $generatedName;
            };
        }
        App::where('id',$id)->update([
                'sub_category_id' => $request->subcategoryid,
                'title' => $request->title,
                'description' => $request->description,
                'img' => $request->old_img,
                'info' => $request->info,
                'color' => $request->color,
                'manufactur_country' => $request->manufactur_country,
                'manual' => $request->manual,
                'weight' => $request->weight,
                'manufacturer' => $request->manufacturer,
                'mode_application' => $request->mode_application,
                'price' => $request->price
        ]);
        return view('all_apps')->with('status', 'Category successfully updatet');
    }

    public function deleteApps($id){
        $category = App::find($id);
        if($category->delete()){
            return redirect()->route('allapps')->with('status', 'Category successfully deleted');
        }

    }
}
