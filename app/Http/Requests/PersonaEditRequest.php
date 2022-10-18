<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaEditRequest extends FormRequest
{

    function attributes() {
        return [
            'dni' => 'dni de la persona',
            'nombre' => 'nombre de la persona',
            'apellidos' => 'apellidos de la persona',
            'telefono' => 'telefono de la persona',
        ];
    }
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    function messages() {
        $max = 'El campo :attribute no puede tener más de :max caracteres';
        $min = 'El campo :attribute no puede tener menos de :min caracteres';
        $required = 'El campo :attribute es obligatorio';

        return [
            'dni.max'      => $max,
            'dni.min'      => $min,
            'dni.required' => $required,
            'nombre.max'      => $max,
            'nombre.min'      => $min,
            'nombre.required' => $required,
            'apellidos.max'      => $max,
            'apellidos.min'      => $min,
            'apellidos.required' => $required,
            'telefono.max'      => $max,
            'telefono.min'      => $min,
            'telefono.required' => $required,
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'dni' => 'required|min:2|max:10',
            'nombre' => 'required|min:2|max:30',
            'apellidos' => 'required|min:2|max:60',
            'telefono' => 'required|min:2|max:15',
        ];
    }
}
