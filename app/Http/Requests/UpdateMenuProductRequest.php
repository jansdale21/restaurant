<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuProductRequest extends FormRequest
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
        return [
            'menu_id' => 'required|exists:menus,id',
            'product_id' => [
                'required',
                'exists:products,id',
                // Prevent duplicate menu-product combinations, excluding the current record
                \Illuminate\Validation\Rule::unique('menu_products')
                    ->where('menu_id', $this->menu_id)
                    ->ignore($this->route('menu_product')->id),
            ],
        ];
    }
}
