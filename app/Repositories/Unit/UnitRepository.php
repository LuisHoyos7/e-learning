<?php 

namespace App\Repositories\Unit;

use App\Models\Unit;
use App\Repositories\BaseRepository;

class UnitRepository extends BaseRepository
{
    public function getModel(){
        return new Unit();
    }
}