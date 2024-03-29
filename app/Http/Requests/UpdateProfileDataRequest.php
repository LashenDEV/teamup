<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileDataRequest extends FormRequest
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
            'name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'full_name' => 'required',
            'nic' => 'required|min:10|max:12',
            'dob' => 'required',
            'sex' => 'required',
            'degree_program' => 'required',
            'year' => 'required',
            'mobile' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
        ];
    }
}
