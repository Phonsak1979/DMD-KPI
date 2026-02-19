<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospcode',
        'hospname',
        'district_code',
        'province_code',
        'zone_code',
    ];
}
