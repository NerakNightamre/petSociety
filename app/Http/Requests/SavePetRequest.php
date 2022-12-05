<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePetRequest extends FormRequest
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
            'Name' => ['required'],
            'Gender' => ['required'],
            'Age' => ['min:0', 'max:20', 'required'],
            'Species' => ['required'],
            'Race' => ['required'],
            'Comments' => ['required'],
            'file' => ['required']
        ];
    }
}