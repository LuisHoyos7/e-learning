<?php 

namespace App\Repositories\Group;

use App\Models\Group;
use App\Repositories\BaseRepository;

class GroupRepository extends BaseRepository
{
    public function getModel(){
        return new Group();
    }
}