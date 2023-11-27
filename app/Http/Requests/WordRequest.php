<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WordRequest extends FormRequest
{
    
    public function rules()
    {
        return[
            'words.word_left' => 'required',
            'words.word_right' => 'required'
        ];
    }
    
    public function messages()
    {
        return[
            'words.word_left.required' => '空欄があります。',
            'words.word_right.required' => ''
        ];
    }
}
