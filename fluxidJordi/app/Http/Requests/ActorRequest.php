<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ActorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
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
            'name' => 'required|alpha|min:2|max:20',
            'nationality' => 'required|alpha|min:2|max:30',
            'year' => 'required|numeric|between:1850,2025',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El nombre es obligatorio',
            'nationality.required' => 'La nacionalidad es obligatoria',
            'year.required' => 'El año de nacimiento es obligatorio',
            'name.alpha' => 'El nombre solo puede contener letras',
            'name.min' => 'El nombre debe tener como minimo 2 carácteres',
            'name.max' => 'El nombre debe tener como máximo 20 carácteres',
            'nationality.alpha' => 'La nacionalidad solo puede contener letras',
            'nationality.min' => 'La nacionalidad debe tener como minimo 2 caracteres',
            'nationality.max' => 'La nacionalidad debe tener como máximo 30 caracteres',
            'year.numeric' => 'El año de nacimiento solo puede contener números',
            'year.between' => 'El año de nacimiento debe ser entre el 1850 y el 2025',
        ];
    }
}
