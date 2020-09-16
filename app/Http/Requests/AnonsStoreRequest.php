<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnonsStoreRequest extends FormRequest
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
            'title' => 'required|min:3|max:125',
            'short_desc' => 'required|min:10|max:255',
            'url' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'service_tax' => 'required|numeric',
            'additional_off' => 'nullable|numeric',
            'need_cart' => 'required|numeric',
            'img' => 'nullable|mimes:jpeg,png,jpg',
            'date_purchase' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Название анонса обязательно',
            'title.min' => 'Длина названия продукта должно быть от :min символов',
            'title.max' => 'Длина названия продукта не должна быть больше :max символов',

            'short_desc.required' => 'Короткое описание обязательно',
            'short_desc.min' => 'Длина короткого описания должно быть от :min символов',
            'short_desc.max' => 'Длина короткого описания не должна быть больше :max символов',

            'url.required' => 'Сылка на сайт обязательна',
            'category_id.required' => 'Категория обязательна',
            'brand_id.required' => 'Бренд обязательно',
            'service_tax.required' => 'Услуги организатора обязтельно',
            'service_tax.numeric' => 'Услуги организатора должны быть числом',

            'need_cart.required' => 'Необходимая сумма обязательна',
            'need_cart.numeric' => 'Необходимая сумма должна быть числом',
            'date_purchase.required' => 'Дата обязательна',

            'img.mimes' => 'Картинка должна иметь расширения :values',





        ];
    }
}
