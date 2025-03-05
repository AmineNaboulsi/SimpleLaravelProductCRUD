<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getCount(){
        $count = User::all()->count();
        return response($count);
    }
}
