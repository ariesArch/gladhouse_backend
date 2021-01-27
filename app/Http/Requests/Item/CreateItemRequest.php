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
            'item_category_id'=>'required',
            'item_sub_category_id'=>'required',
            'name'=>'required',
            'name_mm'=>'required',
            'normal_quantity'=>'required',
            'normal_price'=>'required',
            'special_quantity'=>'required',
            'special_price'=>'required',
            'is_apply_special'=>'required',
            // 'is_single_discount'=>'required',
            // 'single_discount_percent'=>'required',
            // 'cover'=>'required',
            // 'description'=>'required',
        ];
    }
}
