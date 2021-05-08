<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    public function trainers(Request $request){
        $obj = new Trainer();
        $trainers = $obj->paginate(15);
        return view('trainers',['trainers'=>$trainers]);
    }
}
