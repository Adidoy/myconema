<?php

namespace App\Http\Requests\Admin\Maintenance\Taxonomy;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class PhylumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phylumname' => 'required',
            'addedby' => 'nullable'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'phylumname' => 'Phylum Name'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'phylumname.requred' => 'This field is required.'
        ];
    }
}
