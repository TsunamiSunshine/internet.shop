<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'code' => 'required|min:3|max:255|unique:categories,code',
            'name' => 'required|min:3|max:255',
            'description'=> 'required|min:3',
    ];
        if ($this->route()->named('categories.update')){
          $rules['code'] .= ',' . $this->route()->parameter('category')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [

            'code.min' => 'Поле Код должно содержать не менее :min символов',
            'name.min' => 'Поле Название должно содержать не менее :min символов',
            'description.min' => 'Поле Описание должно содержать не менее :min символов',
            'code.required' => 'Полe Код обязательно для ввода',
            'name.required' => 'Полe Название обязательно для ввода',
            'description.required' => 'Полe Описание обязательно для ввода',
            'code.unique' => 'Поле Код должно быть уникальным'
        ];
    }
}
