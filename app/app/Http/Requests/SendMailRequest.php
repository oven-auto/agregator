<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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
            'username'=>'required|min:2|max:30',
            'userphone'=>'required|min:11|max:11|numeric',
            'userquestion'=>'required|min:10|max:300'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Имя обязательное условие',
            'username.min'  => 'Имя минимум 2 символа',
            'userquestion.max'  => 'Имя максимум 2 символа',

            'userphone.required'  => 'Телефон обязательное поле',
            'userphone.min'  => 'Телефон 11 символов',
            'userphone.max'  => 'Телефон 11 символов',
            'userphone.numeric'  => 'Телефон может состоять только из цифр',

            'userquestion.required'  => 'Вопрос обязательное поле',
            'userquestion.min'  => 'Вопрос максимум 10 символов',
            'userquestion.max'  => 'Вопрос максимум 300 символа',
        ];
    }
}
