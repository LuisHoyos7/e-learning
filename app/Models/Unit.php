<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;
class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }


}
