<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CompaniesController extends Controller
{
    public function companies(){
        $obj = new Company();
        $companies = $obj->paginate(15);
        return view('companies',['companies'=>$companies]);
    }
}
