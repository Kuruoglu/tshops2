<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|min:10|max:120',
            'short_desc' => 'required|min:10|max:255',
            'full_desc' => 'required|min:3|max:1000',
            'price' => 'required|numeric',
            'qty' => 'required|numeric',
            'img' => 'required|mimes:jpeg,png,jpg',
            'color' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Название продукта обязательно',
            'short_desc.required' => 'Короткое описание обязательно',
            'full_desc.required' => 'Полное описание обязательно',
            'price.required' => 'Цена обязательна',
            'qty.required' => 'Количество обязательно',
            'img.required' => 'Картинка обязтельна',
            'color.required' => 'Цвет обязателен',

            'name.min' => 'Длина названия продукта должно быть от :min символов',
            'name.max' => 'Длина названия продукта не должна быть больше :max символов',
            'short_desc.min' => 'Длина короткого описания должно быть от :min символов',
            'short_desc.max' => 'Длина короткого описания не должна быть больше :max символов',
            'full_desc.min' => 'Длина полного описания должно быть от :min символов',
            'full_desc.max' => 'Длина полного описания не должна быть больше :max символов',

            'price.numeric' => 'Цена должна быть числом',
            'qty.numeric' => 'Цена должна быть числом',

            'img.mimes' => 'Картинка должна иметь расширения :values',


        ];
    }
}
