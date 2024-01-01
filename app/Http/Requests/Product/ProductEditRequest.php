<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductEditRequest extends FormRequest
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
        $id = $this->route('product');
        return [
            'name' => [
                'required',
                Rule::unique('products')->ignore($id),
            ],
            'price' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng điền tên sản phẩm',
            'name.unique' => "Sản phẩm $this->name đã tồn tại",
            'price.required' => 'Vui lòng điền giá sản phẩm',
        ];
    }
}
