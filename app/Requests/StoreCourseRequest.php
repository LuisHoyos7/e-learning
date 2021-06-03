<?php
namespace App\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{

    public function autorize()
    {
        return true;
    }
    public function rules(){

        return [
            'tipo'=>'required',
            'asunto'=>'required',
        ];
    }


}