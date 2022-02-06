<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
       return vieW('page.Login');
    }

    public function table(){
           $posts = DB::table('account_user') -> get() ;
    return view('page.table',compact('posts'));

    }


    public function Result(Request $request)
    {
        $email = $request-> input('email');
        $pass = $request-> input('password');

        return "Welcome Aboiard Email: " . $email . " PAssword " . $pass . "";
    }

    public function Register()
    {
        return view('page.Register');

    }
    public function addRegister(Request $request)
    {
        DB::table('account_user') -> insert([
            'email' => $request -> email,
            'password' => $request -> password,
        ]);
        return view('page/Login');
    }
    public function getPostId($id)
    {
        $posts = DB::table('account_user') -> where('id', $id) -> first();
        return view('page/',compact('posts'));
    }

    public function deletePostId($id){
        DB::table('account_user') -> where('id', $id) -> delete();

        $posts = DB::table('account_user') -> get() ;
        return back()->with('page.table',compact('posts'));  
    }

    public function edit($id){
        $posts = DB::table('account_user') -> where('id', $id) -> first();
        return view('page.edit',compact('posts'));
    }



    public function update($id,Request $request){

        DB::table('account_user') -> where('id',$id) -> update([
            'id' => $request -> id,

            'email' => $request -> email,
            'password' => $request -> password
        ]);

        $posts = DB::table('account_user') -> get() ;
        return view('page.table',compact('posts'));  

    }



/*     public function edit($id){
        $posts = DB::table('account_user') -> where('id', $id) -> first();

        return view('page.edit', compact('posts'));
    } */
    public function nav()
    {
        return view('page.nav');

    }




}
