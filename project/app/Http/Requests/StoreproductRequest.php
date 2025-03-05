<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreproductRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name'=>['required'],
            'description'=>['required'],
            'price'=>['required'],
        ];
    }

    public function message(): array
    {
        return [
            'name.required'=>"Name required",
            'description.required'=>"Description required",
            'price.required' =>"Price required",
            'price.float' =>"Price Format invalid",
        ];
    }
}
