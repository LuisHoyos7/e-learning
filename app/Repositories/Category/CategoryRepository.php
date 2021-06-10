<?php 

namespace App\Repositories\Group;

use App\Models\Category;
use App\Repositories\BaseRepository;

class GroupRepository extends BaseRepository
{
    public function getModel(){
        return new Category();
    }
}