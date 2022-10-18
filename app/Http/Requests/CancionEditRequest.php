<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaEditRequest extends FormRequest
{

    function attributes() {
        return [
            'titulo' => 'titulo de la cancion',
            'interprete' => 'interprete de la cancion',
            'autor' => 'autor de la cancion',
            'duracion' => 'duracion de la cancion',
            'genero' => 'genero de la cancion',
            'album' => 'album de la cancion',
            'orden' => 'orden de la cancion',
            'fechapublicacion' => 'fecha de publicacion de la cancion',
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
        $gte = 'El campo :attribute debe ser mayor o igual que :value';
        $lte = 'El campo :attribute debe ser menor o igual que :value';
        $numeric = 'El campo :attribute debe ser numérico';
        $time = 'El campo :attribute debe ser de tipo time';
        $date = 'El campo :attribute debe ser de tipo date';
        $required = 'El campo :attribute es obligatorio';

        return [
            'titulo.max' => $max,
            'titulo.min' => $min,
            'titulo.required' => $required,
            'interprete.max' => $max,
            'interprete.min' => $min,
            'interprete.required' => $required,
            'autor.max' => $max,
            'autor.min' => $min,
            'duracion.time' => $time,
            'genero.max' => $max,
            'genero.min' => $min,
            'genero.required' => $required,
            'album.max' => $max,
            'album.min' => $min,
            'orden.gte' => $gte,
            'orden.lte' => $lte,
            'orden.numeric' => $numeric,
            'fechapublicacion.date' => $date,
            'fechapublicacion.required' => $required,
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'titulo' => 'required|min:1|max:80',
            'interprete' => 'required|min:1|max:100',
            'autor' => 'min:1|max:100',
            'duracion' => 'time',
            'genero' => 'required|min:1|max:20',
            'album' => 'min:1|max:70',
            'orden' => 'numeric|gte:1|lte:30',
            'fechapublicacion' => 'required|date',
        ];
    }
}
