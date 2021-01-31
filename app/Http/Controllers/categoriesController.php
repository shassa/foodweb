<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
use DB;
class categoriesController extends Controller
{
    
    function index(){
        $category=category::all();
        return view('categories.index',compact('category'));
    }

    function create(){
        return view('categories.create');
    }
    //store
    function store(Request $request){
       $request->validate([
           'name'=>'required'
       ]);

        $category=new category();
        $category->name=$request->name;
       
       $category->save();
       return redirect('/categories');
    }

    function edite($id){
        $category=category::find($id);
        return view('categories.edite',compact('category'));
    }

    function update($id,Request $request){
        $category=category::find($id);

        $category->name=$request->name;
        $category->update();
        $category->save();
        return redirect('/categories');
    }

    function destroy($id){
        $category=category::find($id);
        $category->delete();
        return redirect()->back();
    }

    function select($id){
        $products=product::with('category')->where('cat_id',$id)->get();

        // $products=DB::table('products')->get();

        return view('products.index',compact('products'));
    }
}
