<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Role;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    // public function home() {
    //     //SQL
    //     // --Select * from product p order by p.price desc
    //     $products = product::orderBy('price', 'desc')->paginate(8);
    //     return view("welcome" , compact("products"));
    // }
    public function login()  {
        return view("auth.login");
    }
    public function register()  {
        //Select * from Role
        $roles = Role::all();
        return view("auth.register" , compact("roles"));
    }
    public function home() {
        return view("welcome");
    }
    public function dashboard() {
        return view("dashboard");
    }
    public function noauthorized() {
        return view("noauthorized");
    }
}
