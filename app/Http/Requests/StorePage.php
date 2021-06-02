<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePage extends FormRequest
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
            'parent_id'=> 'required|numeric',
            'pos'=> 'required|numeric',
            'slug'=> 'required',
            'show'=> 'required|numeric',
            'thumb'=> $this->id == null ? 'nullable|image': '',
        ];
    }
}
