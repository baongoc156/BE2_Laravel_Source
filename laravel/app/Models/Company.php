<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  use HasFactory;
  protected $table = 'companies';

  public function search($key, $categoryId)
  {

    $result = self::where([
      ['company_name', 'LIKE', '%' . $key . '%'],
      ['category_id', '=', $categoryId]
    ])->orWhere([
      ['company_phone', 'LIKE', '%' . $key . '%'],
      ['category_id', '=', $categoryId]
    ])->paginate(15);


    return $result;
  }
}
