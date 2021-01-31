<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\order;
class ordersController extends Controller
{

    function index(){
        $order=order::with('product')->get();
         // dd($products);
         return view('orders.index',compact('order'));
     }
     ///create
    
     function create($id){
        $product=product::find($id);
        return view('orders.create',compact('product'));
    }
    //store
    function store(Request $request){
       $request->validate([
           'name'=>'required',
           'pro_id'=>'required',
           'phone'=>'required'
       ]);
       
       $order=new order();
       $order->name=$request->name;
       $order->phone=$request->phone;
       $order->pro_id=$request->pro_id;

       $order->save();
       return redirect('/products')->with('success',"
       Your Order have been sent, thank you"
     );  
    //    return redirect('/products');
    }

    function destroy($id){
        $order=order::find($id);
        $order->delete();
        return redirect()->back();
    }

}
