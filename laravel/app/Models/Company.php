<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  use HasFactory;
  protected $table = 'companies';
  protected $primaryKey = 'company_id';
  public function category()
  {
    return  $this->hasMany(Category::class,'category_id','company_id');
  }
  public function trainer()
  {
    return $this->hasOne(Trainer::class,'trainer_id','company_id');
  }
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
