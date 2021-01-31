<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use File;
class productsController extends Controller
{
    function index(){
       $products=product::with('category')->get();
        // dd($products);
        return view('products.index',compact('products'));
    }
    ///create
    function create(){
        return view('products.create');
    }
    //store
    function store(Request $request){
       $request->validate([
           'name'=>'required',
           'cat_id'=>'required',
           'price'=>'required'
       ]);
        //addphoto
        if ($request->hasFile('photo')) {
         $file =$request->file('photo');
         $ext= $file->getClientOriginalExtension();
         $filename='coverimage' . '_' . time() . '.' . $ext;
          $file->storeAs('public/storage', $filename);
         //dd($file);
        }
          else{
             echo 'FileNotFoundException';
             }

       $product=new product();
       $product->name=$request->name;
       $product->price=$request->price;
       $product->cat_id=$request->cat_id;
       $product->photo=$filename;

       $product->save();
       return redirect('/products');
    }

    function edite($id){
        $product=product::find($id);
        return view('products.edite',compact('product'));
    }

    function update($id,Request $request){
        $product=product::find($id);
        if($request->hasFile('photo')){
            $image_path=url('localhost/final_project/public/storage/storage/'.$product->photo);
            File::delete($image_path);
            $file =$request->file('photo');
            $ext= $file->getClientOriginalExtension();
            $filename='coverimage' . '_' . time() . '.' . $ext;
             $file->storeAs('public/storage', $filename);
            //dd($file);
           }
             else{
                // echo 'FileNotFoundException';
                $filename=$product->photo;
                }
        
        $product->name=$request->name;
        $product->price=$request->price;
        $product->cat_id=$request->cat_id;
        $product->photo=$filename;
        $product->update();
        $product->save();
        return redirect('/products');
    }

    function destroy($id){
        $product=product::find($id);
        if($product->photo){
            $image_path=url('localhost/final_project/public/storage/storage/'.$product->photo);
            File::delete($image_path);}
        $product->delete();
        return redirect()->back();
    }
}
