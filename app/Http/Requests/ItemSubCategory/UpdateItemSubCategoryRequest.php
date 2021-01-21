<?php

namespace App\Http\Requests\ItemSubCategory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemSubCategoryRequest extends FormRequest
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
            //
            'name' => 'required|string|unique:item_sub_categories,name',
        ];
    }
}
