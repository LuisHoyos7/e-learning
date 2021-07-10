<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'description',
        'photo',
        'price',
        'duration',
        'coupon',
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}

