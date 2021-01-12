<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class CreateItemRequest extends FormRequest
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
            'id'=>'id',
            'name'=>'name',
            'name_mm'=>'name_mm',
            'normal_quantity'=>'normal_quantity',
            'normal_price'=>'normal_price',
            'special_quantity'=>'special_quantity',
            'special_price'=>'special_price',
            'is_apply_special'=>'is_apply_special',
            'is_single_discount'=>'is_single_discount',
            'single_discount_percent'=>'single_discount_percent',
            'cover'=>'cover',
            'description'=>'description',
        ];
    }
}
