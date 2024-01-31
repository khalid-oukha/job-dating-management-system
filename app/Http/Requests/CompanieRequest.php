<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanieRequest extends FormRequest
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
            'title' => 'required|max:255',
            'address' => 'required|max:255',
            'description' => 'required|max:2000',
            'founded_at' => 'required|date',        ];
    }
    public function messages(): array{
        return [
            'name.required' => 'vous devez remplir le champ du titre',
            'name.max' => 'Le name ne doit pas dépasser :max caractères.',
            'title.required' => 'Le champ title est requis.',
            'description.required' => 'Le champ description est requis.',
            'founded_at.date' => 'Le champ founded_at est requis.',
            'founded_at.required' => 'Le champ founded_at doit être une date.',
        ];
    }
}
