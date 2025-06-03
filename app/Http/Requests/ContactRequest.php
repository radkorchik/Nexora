<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле ФИО обязательно для заполнения',
            'email.required' => 'Поле Email обязательно для заполнения',
            'email.email' => 'Введите корректный email адрес',
            'phone.required' => 'Поле Телефон обязательно для заполнения',
        ];
    }
}
