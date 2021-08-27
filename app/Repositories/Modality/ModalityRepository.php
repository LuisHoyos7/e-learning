<?php 

namespace App\Repositories\Modality;

use App\Models\Modality;
use App\Repositories\BaseRepository;

class ModalityRepository extends BaseRepository
{
    public function getModel(){
        return new Modality();
    }
}