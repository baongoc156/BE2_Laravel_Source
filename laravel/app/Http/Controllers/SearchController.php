<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    //
    public function search(Request $request){
        $key = $request->input('search');
        $obj = new Trainer();
        $trainers = $obj->search($key);
        return view('search',['trainers'=>$trainers,'key'=>$key]);
    }
}
