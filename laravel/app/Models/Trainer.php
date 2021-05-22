<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $primaryKey = 'trainer_id';
    public function company()
    {
        return $this->belongsTo(Company::class,'trainer_id','company_id');
    }
    public function search($key)
    {
        $result = self::where('trainer_name', 'LIKE', '%'.$key.'%')
            ->orWhere('trainer_email', 'LIKE', '%'.$key.'%')
            ->orWhere('trainer_phone', 'LIKE', '%'.$key.'%')->paginate(15);
        return $result;
    }
}
