<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name'=>['required','string','max:200'],
            'category' =>'',
            'job_nature' =>'',
            'vacancy'=>'required',
            'salary' => 'required',
            'location' => 'required',
            'description' => 'required',
            'benefits' => 'required',
            'responsibility' => 'required',
            'keywords' => 'required',
            'qualifications'=>'',

            'company_name'=> 'required',
            'company_location'=>'required',
            'company_website'=>'required',

        ];
    }
}
