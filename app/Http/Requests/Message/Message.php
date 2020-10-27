<?php

namespace App\Http\Requests\Message;

use Illuminate\Foundation\Http\FormRequest;

class Message extends FormRequest
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
            'name' => ['required','string','min:7','max:100'],
            'email' => ['required','email','min:11','max:80'],
            'message' => ['required','string','min:20','max:700'],
        ];
    }
    public function messages()
    {
        return [
            'name.required'  => 'Please enter your name',
            'name.string'  => 'Wrong name!',
            'name.min'  => 'Full name must consist of at least 7 elements',
            'name.max'  => 'Full name must consist of a maximum of 100 elements',

            'email.required'  => 'Please enter your email',
            'email.email'  => 'Wrong email!',
            'email.min'  => 'Email must consist of at least 11 elements',
            'email.max'  => 'Email must consist of a maximum of 80 elements',

            'message.required'  => 'Please enter your message',
            'message.string'  => 'İncorrect message!',
            'message.min'  => 'Message must consist of at least 20 elements',
            'message.max'  => 'Message must consist of a maximum of 700 elements'
        ];

    }
}
