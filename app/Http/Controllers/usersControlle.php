<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class usersControlle extends Controller
{
    function create(){
        return view('users.regist');
    }

    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);   
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
 
        $user->save();
        return redirect('/products');
     }

     function open(){
        return view('users.login');
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]); 
        $users= DB::table('users')->where('email',$request->email)->first();
        if($users->email==$request->email){
            $name=$users->name;
            // dd($name);
            $request->session()->put('name',$name);
             return redirect('/products/');
        }else{
        return redirect('/regist');}
     }
}
