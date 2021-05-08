<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(){
        $obj = new Category();
        $categories = $obj->paginate(15);
        return view('categories',['categories'=>$categories]);
    }
}
