<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CancionCreateRequest extends FormRequest {
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }
    
    function attributes() {
        return [
            'titulo'           => 'TÍtulo de la canción',
            'interprete'       => 'Intérprete de la canción',
            'autor'            => 'Autor de la canción',
            'duracion'         => 'Duración de la canción',
            'genero'           => 'Género de la canción',
            'album'            => 'Álbum de la canción',
            'orden'            => 'Orden de la canción',
            'fechapublicacion' => 'Fecha de publicación de la canción',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'titulo'           => 'required|string|min:1|max:80|unique:cancion,titulo',
            'interprete'       => 'required|string|min:1|max:100',
            'autor'            => 'nullable|string|min:1|max:100',
            'duracion'         => 'nullable|date_format:H:i:s',
            'genero'           => 'required|string|min:1|max:20',
            'album'            => 'nullable|min:1|max:70',
            'orden'            => 'nullable|numeric|gte:1|lte:30',
            'fechapublicacion' => 'required|date',
        ];
    }
    
    function messages() {
        $max      = 'El campo :attribute no puede tener más de :max caracteres';
        $min      = 'El campo :attribute no puede tener menos de :min caracteres';
        $gte      = 'El campo :attribute debe ser mayor o igual que :value';
        $lte      = 'El campo :attribute debe ser menor o igual que :value';
        $string   = 'El campo :attribute debe ser string';
        $numeric  = 'El campo :attribute debe ser numérico';
        $date     = 'El campo :attribute debe ser de tipo date';
        $required = 'El campo :attribute es obligatorio';

        return [
            'titulo.string'             => $string,
            'titulo.max'                => $max,
            'titulo.min'                => $min,
            'titulo.required'           => $required,
            'titulo.unique'             => 'El campo :attribute tiene que ser una fecha en formato dd/mm/aaaa',
            'interprete.string'         => $string,
            'interprete.max'            => $max,
            'interprete.min'            => $min,
            'interprete.required'       => $required,
            'autor.string'              => $string,
            'autor.max'                 => $max,
            'autor.min'                 => $min,
            'duracion.date_format'      => 'El campo :attribute tiene que ser un tiempo en formato hh:mm:ss',
            'genero.string'             => $string,
            'genero.max'                => $max,
            'genero.min'                => $min,
            'genero.required'           => $required,
            'album.max'                 => $max,
            'album.min'                 => $min,
            'orden.gte'                 => $gte,
            'orden.lte'                 => $lte,
            'orden.numeric'             => $numeric,
            'fechapublicacion.date'     => $date,
            'fechapublicacion.required' => $required,
        ];
    }
}