<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMeetingRequest extends FormRequest
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
            'title' => 'required|unique:meetings',
            'meeting_link' => 'required',
            'meeting_id' => 'required',
            'meeting_password' => 'required',
            'date' => 'required',
            'time' => 'required'
        ];
    }
}
