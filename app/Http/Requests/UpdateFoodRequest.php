<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFoodRequest extends FormRequest
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
            'restaurant_id' => 'nullable|exists:restaurants,id',
            'name'=>'required | string | max:50',
            'description'=> 'required',
            'price'=>'required | min:0 | decimal: 0,2',
            'vegetarian' => 'boolean',
            'vegan' => 'boolean',
            'availability' => 'boolean',
            'img'=> 'nullable | image'
        ];
    }
}
