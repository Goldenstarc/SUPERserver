<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductsRequest extends Request
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
            'Category_id'=>'required',
            'name' => 'required|Between:5,75',
            'code'=> 'required|Between:11,15',
            'photo_id'=> 'required',
            'brand_id'=> 'Integer|required',
            'price'=> 'numeric|required',
            'min_price'=> 'numeric|required',
            'off'=> 'numeric|required|Between:0,100',
            'short_description'=> 'required|Between:15,100',
            'long_description'=> '',
        ];
    }
}
