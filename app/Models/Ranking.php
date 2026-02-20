<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;

    protected $fillable = [
        'r_main',
        'r_sub',
        'title',
        'url',
        'department_code',
        'target',
        'result',
        'target_value',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_code', 'department_code');
    }
}
