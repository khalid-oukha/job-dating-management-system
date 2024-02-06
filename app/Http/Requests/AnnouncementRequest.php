<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required',
            'companie_id' => 'required',
         ];
    }

    public function messages(): array{
        return [
            'title.max' => 'Le name ne doit pas dépasser :max caractères.',
            'title.required' => 'Le champ title est requis.',
            'content.required' => 'Le champ content est requis.',
            'user_id.required' => 'Le champ username est requis.',
            'companie_id.required' => 'Le champ company est requis.',
        ];
    }
}
