<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    
    //
    public function searchTrainers(Request $request){
        $key = $request->input('search');
        $obj = new Trainer();
        $trainers = $obj->search($key);
        return view('search',['trainers'=>$trainers,'key'=>$key]);
    }

    public function searchCompaniesByCategory(){
        $obj = new Category();
        $categories = $obj->getSelect();
        return view('searchCompany',['categories'=>$categories]);
   
    }
}
