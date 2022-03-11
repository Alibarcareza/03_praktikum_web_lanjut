<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function product(){
        $allproduct = Post::all();

        return view('product')
        ->with('title','Product Kita')
        ->with('all_product',$allproduct);
    }
}
