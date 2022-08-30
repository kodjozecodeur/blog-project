<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //create the pfc
    public function index() {
        $allcategories = Category::all();
        //let's retrieve the post , we just retriev the last model from the model
        $posts = Post::when(request('category_id'), function($query){
            $query->where('category_id', request('category_id'));
        })
        ->latest()
        ->get();

        return view('index',compact('allcategories','posts'));
    }

}
