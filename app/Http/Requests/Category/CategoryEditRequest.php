<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryEditRequest extends FormRequest
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
        $id = $this->route('category');
        return [
            'name' => [
                'required',
                Rule::unique('categories')->ignore($id),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng điền tên danh mục',
            'name.unique' => "Sản phẩm $this->name đã tồn tại",
        ];
    }
}
