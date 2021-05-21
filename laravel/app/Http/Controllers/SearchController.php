<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    //
    public function searchTrainers(Request $request)
    {
        $key = $request->input('search');
        $obj = new Trainer();
        $trainers = $obj->search($key);
        return view('search', ['trainers' => $trainers, 'key' => $key]);
    }

    public function searchCompaniesByCategory(Request $request)
    {
        $cateModel = new Category();
        $companyModel = new Company();
        $categories =  $cateModel->getSelect();

        $key = $request->input('search');
        $cateID = $request->input('categories');

        $companies = $companyModel->search($key, $cateID);
        
        return view('searchCompany', ['categories' => $categories, 'key' => $key, 'cateID' => $cateID, 'companies' => $companies]);
    }
}
