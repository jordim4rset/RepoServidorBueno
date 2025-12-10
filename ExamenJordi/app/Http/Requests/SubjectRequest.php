<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'code' => 'required|min:5|max:5|alpha_num',
            'cicle' => 'min:10|max:50',
            'curse' => 'required|numeric|between:2025,2030',
        ];
    }

    public function messages(){

        return [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre como mínimo ha de contener 3 caracteres',
            'name.max' => 'El nombre como máximo ha de contener 50 caracteres',
            'code.required' => 'El código es obligatorio',
            'code.min' => 'El código como mínimo ha de contener 5 caracteres',
            'code.max' => 'El código como máximo ha de contener 5 caracteres',
            'code.alpha_num' => 'El código solo puede contener letras y números',
            'curse.required' => 'El curso es obligatorio',
            'cicle.min' => 'El ciclo debé contener como máximo 50 caracteres',
            'cicle.min' => 'El ciclo debé contener como mínimo 10 caracteres',
            'curse.between' => 'El curso debe ser un año entre 2025 y 2030',
        ];
    }
}
