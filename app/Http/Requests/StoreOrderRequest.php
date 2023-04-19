<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'total_price' => 'required | min:0 | decimal:2',
            'client_name'=> 'required | max:20 | string',
            'client_surname'=> 'required | max:20 | string',
            'client_address' => 'required | string | max:100 | min:5',
            'client_phone' => 'required | string | min:10 | max:15',
            'client_email' => 'required | string | email',
            'notes'=> 'required',
            'restaurant_id' => 'required',
            'food_id' => 'required',
        ];
    }
}
