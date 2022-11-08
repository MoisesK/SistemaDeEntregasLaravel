<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveriesFormRequest extends FormRequest
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
        return [
            'title' => ['min:3'],
            'deadline' => ['required'],
            'descript' => ['min:10'],
            'place' => ['min:5']
        ];
    }

    public function messages()
    {
        return [
            'title.min' => "O campo Titulo deve ser preenchido com no mínimo :min caracteres.",
            'deadline.required' => 'O campo Prazo deve ser preenchido!',
            'descript.min' => 'O campo de Descrição deve ser preenchido com no mínimo :min caracteres.',
            'place.min' => 'O campo de Local deve ser preenchido com no mínimo :min caracteres.'
        ];
    }
}
