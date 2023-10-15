<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'tytul' => 'required|min:6',
            'autor' => 'required|min:2',
            'email' => 'email:rfc,dns',
            'tresc' => 'required|min:5'
        ];
    }
    public function messages(): array
    {
        return [
            'email' => 'Błędny email ',
            'tytul.required' => 'Nie może być pusty',
            'tytul.min' => ' :attribute nie może być pusty :min'
        ];
    }
}
