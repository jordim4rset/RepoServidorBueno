<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'dni' => 'required|alpha_num:ascii|size:9',
            'name' => 'required|alpha|min:1|max:20',
            'firstSurname' => 'required|alpha|min:2|max:20',
            'secondSurname' => 'required|alpha|min:2|max:20',
            'email' => 'required|email',
        ];
    }
}
