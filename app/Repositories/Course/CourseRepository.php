  
<?php

namespace App\Repositories\Course;

use App\Repositories\BaseRepository;

use App\Models\Course;

class CourseRepository extends BaseRepository
{

    public function getModel(){
        return new Course();
    }

    
}