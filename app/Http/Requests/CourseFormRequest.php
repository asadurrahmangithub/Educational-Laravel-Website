<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'course_name'=>[
                'required'
            ],
            'button_1'=>[
                'nullable'
            ],
            'button_2'=>[
                'nullable'
            ],
            'course_description'=>[
                'required'
            ],
            'technology'=>[
                'required'
            ],
            'cost'=>[
                'required'
            ],
            'total_cost'=>[
                'required'
            ],
            'semester'=>[
                'required'
            ],
            'student'=>[
                'required'
            ],
            'image'=>[
                'nullable'
            ],
        ];
    }
}
