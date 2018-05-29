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
use App\Projects;
use App\ProjectsImages;
use App\Partners;
use App\Shops;
use App\ShopsImages;


class AppController extends Controller
{

    public function serviceForm()
    {
        return view('add_service');
    }

    public function addService(Request $request)
    {
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

    public function allServices()
    {
        $services = Services::all();
        return view('all_services', compact('services'));
    }

    public function editServiceForm($id)
    {
        $services = Services::find($id);
        return view('edit_service', compact('services'));
    }

    public function editService(Request $request, $id)
    {
        if ($request->method("post")) {
            $services = Services::find($id);
            $services->name_en = $request->name_en;
            $services->name_am = $request->name_am;
            $services->name_ru = $request->name_ru;
            $services->title_en = $request->title_en;
            $services->title_am = $request->title_am;
            $services->title_ru = $request->title_ru;
            if ($services->save()) {
                return redirect()->route('allservice')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteService($id)
    {
        $services = Services::find($id);
        if ($services->delete()) {
            return redirect()->route('allservice')->with('status', 'Category successfully deleted');
        }
    }

    public function subserviceForm()
    {
        $services = Services::all();
        return view('add_subservice', compact('services'));
    }

    public function addsubService(Request $request)
    {
        if ($request->method("post")) {
            $subcategory = Services::find($request->services_id);
            if ($request->hasFile('img')) {
                $originalName = $request->img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if ($request->img->storeAs('public/upload', $generatedName)) {
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

    public function allSubService()
    {
        return view('all_subservice', compact('subService'));
    }

    public function anyDataSub()
    {
        $subService = SubService::with('services')->get();
        return Datatables::of($subService)
            ->addColumn('action', function ($subService) {
                return '<a href="' . route('subservice_edit_form', $subService->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a href="' . route('subservice_delete', $subService->id) . '" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>';
            })->make(true);

    }

    public function editSubserviceForm($id)
    {
        $subservice = SubService::find($id)->first()->toArray();
        $service = Services::all();
        return view('edit_subservice', compact('subservice', 'service', 'id'));
    }

    public function editSubserviceedit(Request $request, $id)
    {
        if ($request->hasFile('img')) {
            $originalName = $request->img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if ($request->img->storeAs('public/upload', $generatedName)) {
                $request->old_img = $generatedName;
            };
        }
        SubService::where('id', $id)->update([
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

    public function deleteSubservice($id)
    {
        $subservice = SubService::find($id);
        if ($subservice->delete()) {
            return redirect()->route('allsubservice')->with('status', 'Category successfully deleted');
        }

    }

    public function projectsForm()
    {
        return view('add_projects');
    }

    public function addProjects(Request $request)
    {
        $projects = Projects::create($request->all());
        foreach ($request->img as $img) {
            $originalName = $img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if ($img->storeAs('public/upload', $generatedName)) {
                ProjectsImages::create([
                    'projects_id' => $projects->id,
                    'filename' => $generatedName
                ]);
            };

        }
        return redirect()->back()->with('status', 'App successfully added');
    }

    public function allProjects()
    {
        $projects = Projects::all();
        return view('all_projects', compact('projects'));
    }

    public function editProjectsForm($id)
    {
        $projects = Projects::find($id);
        return view('edit_projects', compact('projects'));
    }

    public function editProject(Request $request, $id)
    {
        if ($request->method("post")) {
            $projects = Projects::find($id);
            $projects->name_en = $request->name_en;
            $projects->name_am = $request->name_am;
            $projects->name_ru = $request->name_ru;
            $projects->description_en = $request->description_en;
            $projects->description_am = $request->description_am;
            $projects->description_ru = $request->description_ru;
            if ($projects->save()) {
                return redirect()->route('allprojects')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteProjects($id)
    {
        $projects = Projects::find($id);
        if ($projects->delete()) {
            return redirect()->route('allprojects')->with('status', 'Category successfully deleted');
        }
    }

    public function partnersForm()
    {
        return view('add_partners');
    }

    public function addPartners(Request $request)
    {
        if ($request->method("post")) {
            if ($request->hasFile('img')) {
                $originalName = $request->img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if ($request->img->storeAs('public/upload', $generatedName)) {
                    $request->img = $generatedName;
                };
            }
            $partners = new Partners([
                'name_en' => $request->name_en,
                'name_am' => $request->name_am,
                'name_ru' => $request->name_ru,
                'img' => $request->img,

            ]);
            $partners->save();

            return redirect()->back()->with('status', 'App successfully added');

        }
    }

    public function allPartners()
    {
        $partners = Partners::all();
        return view('all_partners', compact('partners'));
    }

    public function deletePartners($id)
    {
        $partners = Partners::find($id);
        if ($partners->delete()) {
            return redirect()->route('allpartners')->with('status', 'Category successfully deleted');
        }
    }

    public function shopForm()
    {
        return view('add_shop');
    }

    public function addShop(Request $request)
    {
        $shop = Shops::create($request->all());
        foreach ($request->img as $img) {
            $originalName = $img->getClientOriginalName();
            $generatedName = time() . $originalName;
            if ($img->storeAs('public/upload', $generatedName)) {
                ShopsImages::create([
                    'shops_id' => $shop->id,
                    'filename' => $generatedName
                ]);
            };

        }
        return redirect()->back()->with('status', 'App successfully added');
    }

    public function allShop()
    {
        $shops = Shops::all();
        return view('all_shops', compact('shops'));
    }

    public function editShopForm($id)
    {
        $shops = Shops::find($id);
        return view('edit_shops', compact('shops'));
    }

    public function editShop(Request $request, $id)
    {
        if ($request->method("post")) {
            $shops = Shops::find($id);
            $shops->name_en = $request->name_en;
            $shops->name_am = $request->name_am;
            $shops->name_ru = $request->name_ru;
            $shops->description_en = $request->description_en;
            $shops->description_am = $request->description_am;
            $shops->description_ru = $request->description_ru;
            $shops->price = $request->price;
            if ($shops->save()) {
                return redirect()->route('allshops')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteShops($id)
    {
        $shops = Shops::find($id);
        if ($shops->delete()) {
            return redirect()->route('allshops')->with('status', 'Category successfully deleted');
        }

    }
}
