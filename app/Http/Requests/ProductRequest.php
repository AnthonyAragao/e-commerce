<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $slug = $this->route('product');
        $ignoreRule = $slug ? Rule::unique('products', 'sku')->ignore($slug, 'slug') : 'unique:products,sku';

        return [
            'name' => 'required|string|max:255',
            'category' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'regular_price' => 'numeric',
            'sale_price' => 'required|numeric',
            'sku' => ['required', 'string', $ignoreRule],
            'stock' => 'required|integer',
            'images' => 'required|array',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
