<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return ture;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|alpha|min:2|max:50',
            'year' => 'required|numeric|between:1850,2025',
            'episodes' => 'required|numeric|min:0',
            'rating' => 'required|numeric|min:0',
            'hasManga' => 'required|numeric|min:0|max:1',
        ];
    }
}
