<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        $this->offsetUnset('_token');
        return [
            'menuid' => 'required',
            'title' => 'required',
            'number' => ['required','integer'],
            'content' => 'required',
            'key'=>'nullable',
            'desc' => 'nullable'
        ];
    }
}
