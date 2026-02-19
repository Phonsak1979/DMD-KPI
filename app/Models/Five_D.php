<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Five_D extends Model
{
    use HasFactory;
    protected $table = 'five__d_s';
    protected $fillable = [
        'five_d_code',
        'five_d_name',
    ];
}
