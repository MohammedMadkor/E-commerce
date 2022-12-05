<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            "Category_id" => "required",
            "name" => "required",
            "price" => "required",
            "prand" => "required",

        ];
    }
    public function messages()
    {
        return [
            "Category_id.required" => "Category_id is required",
            "name.required" => "name is required",
            "price.required" => "price is required",
            "prand.required" => "prand is required",
        
        ];
    }
}
