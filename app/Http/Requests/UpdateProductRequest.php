<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $productId = $this->route('product')->id;

        return [
            'name'  => 'required|unique:products,name,' . $productId,
            'price' => 'required|numeric|min:0'
        ];
    }
}
