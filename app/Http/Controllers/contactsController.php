<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
class contactsController extends Controller
{
    function index(){
        $contacts=contact::all();
        return view('contact.index',compact('contacts'));
    }
    function create(){
        return view('contact.create');
    }
    
    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'message'=>'required'
        ]);
        
        $contact=new contact();
        $contact->name=$request->name;
        $contact->message=$request->message;
    
        $contact->save();
      return redirect('/products')->with('success',"
      Your Message have been sent, thanks for your Note"
    );   

        // return redirect('/products');
     }

     function destroy($id){
        $contact=contact::find($id);
        $contact->delete();
        return redirect()->back();
    }
}
