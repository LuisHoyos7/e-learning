<?php 

namespace App\Repositories\Third;

use App\Models\Third;
use App\Repositories\BaseRepository;

class ThirdRepository extends BaseRepository
{
    public function getModel(){
        return new Third();
    }
}