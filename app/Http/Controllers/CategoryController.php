<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.list',['categories'=> $categories]);
    }
    public function create(){
        return view('categories.new');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required'
        ]);
       $category = new Category;
       $category->title =$request->title;
       $category->save();
       return redirect('/');
    }
    public function edit($id){
         $category = Category::where('id',$id)->first();
         return view('categories.edit',compact('category')); 
    }
}
