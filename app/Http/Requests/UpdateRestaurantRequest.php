<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
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
            'user_id' => 'nullable | exists:users, id',
            'name'=>'required | string |min:1| max:50',
            'address'=>'required | string | max:100 | min:5',
            'p_iva'=>'required | string | size:11 ',
            'description'=> 'nullable',
            'phone'=>'required | string | min:10 | max:15',
            'types'=> 'required | array | exists:types,id',
            'img'=> 'nullable | image'
        ];
    }
}
