<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    //
    public function register()
    {
        return view("register");
    }
    public function login(Request $request)
    {
        // dd($request);
        //    storeUser($request);
        return view("login");
    }
    public function storeUser(Request $request)
    {
        //  dd($request);
        $request->validate([
            "Name" => "min:3|max:20|required",
            "email" => "min:5|max:30|required",
            "password" => "min:5|max:50|required",

        ]);
        DB::table("users")->insert(
            [
                "Name" => $request->name,
                "email" => $request->email,
                "password" => bcrypt($request->password)
            ]
        );
    }
}
