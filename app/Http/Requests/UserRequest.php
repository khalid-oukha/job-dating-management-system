<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
         ];
    }

    public function messages(): array{
        return [
            'name.min' => 'Le name ne doit pas dépasser :max caractères.',
            'email.required' => 'Le champ title est requis.',
            'password.min' => 'email ne doit pas dépasser :min caractères.',
            'password.required' => 'Le champ password est requis.',
        ];
    }
}
