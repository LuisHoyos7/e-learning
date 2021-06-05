  
<?php

namespace App\Repository;


use App\Models\Course;

class CourseRepository
{
    public function create($pqrsData)
    {

        $course = new Course();
        // $prqs->asunto= $pqrsData->input('asunto');
        // $prqs->tipo_id= $pqrsData->input('tipo');
        // $prqs->user_id=auth()->user()->id;
        // $file = $pqrsData->file('files');
     
       

        return $course->save();
    }
}