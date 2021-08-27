<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'photo',
        'mobile',
        'address',
        'user_id',
        'profession',
        'identification',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}