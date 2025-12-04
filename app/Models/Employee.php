<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function scopeSalary($query,$salary)
    {
        return $query->where('salary',$salary);
    }

    public function scopeHighSalary($query,$amount=20000)
    {
        return $query->where('salary','>',$amount);
    }
}
