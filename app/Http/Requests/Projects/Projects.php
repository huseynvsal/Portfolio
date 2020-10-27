<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class Projects extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'project_name' => ['required','string','min:2','max:100'],
            'url' => ['required','string','min:8','max:200'],
//            'image' => ['required'],
            'category' => ['required','string','min:1','max:20']
        ];
    }

    public function messages()
    {
        return [
            'project_name.required'  => 'Please enter project name',
            'project_name.string'  => 'Wrong name!',
            'project_name.min'  => 'Project name must consist of at least 2 elements',
            'project_name.max'  => 'Project name must consist of a maximum of 100 elements',

            'url.required'  => 'Please enter project url',
            'url.email'  => 'Wrong url!',
            'url.min'  => 'Url must consist of at least 8 elements',
            'url.max'  => 'Url must consist of a maximum of 200 elements',

//            'image.required'  => 'Please add project image',

            'category.required'  => 'Please enter category',
            'category.string'  => 'İncorrect category!',
            'category.min'  => 'Category must consist of at least 1 elements',
            'category.max'  => 'Category must consist of a maximum of 20 elements',
        ];

    }
}
