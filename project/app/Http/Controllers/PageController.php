<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {
        //SQL
        // --Select * from product p order by p.price desc
        $products = product::orderBy('price', 'desc')->paginate(8);
        return view("welcome" , compact("products"));
    }
}
