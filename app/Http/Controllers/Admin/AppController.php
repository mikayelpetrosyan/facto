<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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

    public function allServices() {
        $services = Services::all();
        return view('all_services',compact('services'));
    }

    public function editServiceForm ($id) {
        $services = Services::find($id);
        return view('edit_service', compact('services'));
    }

    public function editService(Request $request, $id) {
        if($request->method("post")){

            $services = Services::find($id);
            $services->name_en = $request->name_en;
            $services->name_am = $request->name_am;
            $services->name_ru = $request->name_ru;
            $services->title_en = $request->title_en;
            $services->title_am = $request->title_am;
            $services->title_ru = $request->title_ru;
            if($services->save()){
                return redirect()->route('allservice')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteService($id){
        $services = Services::find($id);
        if($services->delete()){
            return redirect()->route('allservice')->with('status', 'Category successfully deleted');
        }
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

    public function allSubService(){
        return view('all_subservice', compact('subService'));
    }

    public function anyDataSub(){
        $subService = SubService::with('services')->get();
        return Datatables::of($subService)
            ->addColumn('action', function ($subService) {
                return '<a href="'. route('subservice_edit_form',  $subService->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="'. route('subservice_delete',  $subService->id).'" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
            })->make(true);

    }

    public function editSubserviceForm ($id) {
        $subservice = SubService::find($id)->first()->toArray();
        $service = Services::all();
        return view('edit_subservice',compact('subservice','service','id'));
    }

    public function editSubserviceedit (Request $request, $id) {
        if ($request->hasFile('img')) {
            $originalName = $request->img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if($request->img->storeAs('public/upload', $generatedName) ){
                $request->old_img = $generatedName;
            };
        }
        SubService::where('id',$id)->update([
            'services_id' => $request->services_id,
            'title_en' => $request->title_en,
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'description_en' => $request->description_en,
            'description_am' => $request->description_am,
            'description_ru' => $request->description_ru,
            'img' => $request->old_img,
        ]);
        return view('all_subservice')->with('status', 'Subservice successfully updatet');
    }

    public function deleteSubservice ($id) {
        $subservice = SubService::find($id);
        if($subservice->delete()){
            return redirect()->route('allsubservice')->with('status', 'Category successfully deleted');
        }

    }

}
