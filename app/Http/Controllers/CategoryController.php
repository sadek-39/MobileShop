<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index(){
        $category=Category::orderBy('id','desc')->get();
        return view('admin.category.index',compact('category'));
    }
    public function create(){
        $main_category=Category::orderBy('name','desc')->get();

        return view('admin.category.create',compact('main_category'));
    }
    public function store(Request $request)
    {
         $this->validate($request,[
            'name'=>'required',
            'description'=>'required'
        ]);
        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;
        $category->parent_id=$request->parent_id;
        $category->save();

        // session()->flash('success','a category saved succesfully');

        return redirect()->route('admin.category');

        
    }
}
