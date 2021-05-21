<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function getSelect(){
        $categories = $this->pluck('category_name','category_id');
        return $categories;
    }
 
}
