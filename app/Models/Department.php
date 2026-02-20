<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_code',
        'department_name',
    ];

    public function rankings()
    {
        return $this->hasMany(Ranking::class, 'department_code', 'department_code');
    }
}
