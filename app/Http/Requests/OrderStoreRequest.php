<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'url' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'size' => 'required',
            'color' => 'required',
            'img' => '->nullable|mimes:jpeg,png,jpg',
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'Сылка на сайт обязательна',
            'qty.required' => 'Поле количество обязательно',
            'price.required' => 'Поле цена обязательна',
            'color.required' => 'Поле цвет обязательно',
            'size.required' => 'Поле размер обязательно',
            'img.mimes' => 'Картинка должна иметь расширения :values',
        ];
    }
}
