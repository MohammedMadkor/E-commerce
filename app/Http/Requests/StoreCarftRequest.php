<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarftRequest extends FormRequest
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
            "User_id" =>"required",
            "name" =>"required",
            "category" =>"required",
            "prand" =>"required",
            "price" =>"required",
            "quantity" =>"required",

        ];
    }
    public function messages()
    {
        return [

            "quantity.quantity" =>"quantity is quantity  ",
        ];
    }
}
