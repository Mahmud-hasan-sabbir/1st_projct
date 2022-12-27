<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories,$category;
    public function addcategory()
    {
        return view('front.category.add-category');
    }
    public function categorystore(Request $request)
    {
        Category::savecategory($request);
        return redirect()->back()->with('message','category info save successfully.');
    }
    public function managecategory()
    {
        $this->categories = Category::all();
        return view('front.manage.manage-category',[
            'categories'=>$this->categories
        ]);
    }
    public function editcategory($id)
    {
        $this->category = Category::find($id);
        return view('front.edit.edit-category',[
            'category'=>$this->category
        ]);
    }
    public function updatecategory(Request $request , $id)
    {
        Category::updatecategory($request , $id);
        return redirect('/manage-category')->with('message','update category info successfully.');
    }

    public function deletecategory($id)
    {
        Category::deletecategory($id);
        return redirect('/manage-category')->with('message','category info deleted successfully.');

    }

}
