<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function categoryForm(){
        return view('add_category');
    }

    public function addCategory(Request $request){
        if($request->method("post")){

            $this->validate($request, [
                'category' => 'required|unique:categories,category|max:255'
            ]);

            $category = new category;
            $category->category = $request->category;

            if($category->save()){
                return redirect()->back()->with('status', 'Category successfully added');
            }
        }
    }

    public function allCategory(){
        $categories = Category::all();
        return view('all_category', compact('categories'));
    }

    public function editCategoryForm($id){
        $category = Category::find($id);
        return view('edit_category', compact('category'));
    }

    public function editCategory(Request $request, $id){
        if($request->method("post")){

            $this->validate($request, [
                'category' => 'required|unique:categories,category,$id|max:255'
            ]);

            $category = category::find($id);
            $category->category = $request->category;
            if($category->save()){
                return redirect()->route('allcategory')->with('status', 'Category successfully changed');
            }
        }
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        if($category->delete()){
            return redirect()->route('allcategory')->with('status', 'Category successfully deleted');
        }
    }

    ////////////////// SUB Category ///////////////////////////

    public function subcategoryForm(){
        $categories = Category::all();
        return view('add_subcategory', compact('categories'));
    }

    public function addSubcategory(Request $request){

        if($request->method("post")){

            $this->validate($request, [
                'subcategory' => 'required|unique:sub_categories,subcategory|max:255',
                'sub_img'=> 'required',
            ]);
            $category = Category::find($request->categoryId);
            if ($request->hasFile('sub_img')) {
                $originalName = $request->sub_img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if($request->sub_img->storeAs('public/upload', $generatedName) && $category ){
                    $subcategory = new SubCategory;
                    $subcategory->subcategory = $request->subcategory;
                    $subcategory->sub_img = $generatedName;
                };
            }

            if($category->sub_categories()->save($subcategory)){
                return redirect()->back()->with('status', 'Subcategory successfully added');
            }
        }
    }

    public function allSubcategory(){
        $subcategories  = SubCategory::with('categories')->get();
        return view('all_subcategory', compact('subcategories'));
    }

    public function editSubcategoryForm($id){
        $categories = Category::all();
        $subcategory = SubCategory::find($id);
        return view('edit_subcategory', compact( 'categories', 'subcategory'));
    }

    public function editSubcategory(Request $request, $id){
//        $xx = unlink(public_path('storage/upload/1507289065luke.gif'));
//        dd($xx);
        if($request->method("post")){

            $this->validate($request, [
                'subcategory' => 'required|unique:sub_categories,subcategory,'.$id.'|max:255',
            ]);
            $category = Category::find($request->categoryId);
            $subcategory = SubCategory::find($id);
            $subcategory->subcategory = $request->subcategory;
            if ($request->hasFile('sub_img')) {
                $originalName = $request->sub_img->getClientOriginalName();
                $generatedName = time() . $originalName;
                if($request->sub_img->storeAs('public/upload', $generatedName)){
                    $subcategory->sub_img = $generatedName;
                }
            }
            if($category->sub_categories()->save($subcategory)){
                return redirect()->route('allsubcategory')->with('status', 'Subcategory successfully updated');
            }
        }
    }

    public function deleteSubcategory($id){
        $subcategory = SubCategory::find($id);
        if($subcategory->delete()){
            return redirect()->route('allsubcategory')->with('status', 'Subcategory successfully deleted');
        }
    }
}
