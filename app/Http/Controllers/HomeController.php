<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //create the pfc
    public function index() {
        $allcategories = Category::all();

        return view('index',['categories'=>$allcategories]);
    }

}
