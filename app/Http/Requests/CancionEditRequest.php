<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CancionEditRequest extends CancionCreateRequest {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        $rules = parent::rules();
        $rules['titulo'] = 'required|string|min:1|max:80|unique:cancion,titulo,'.$this->cancion->id;
        return $rules;
    }
}
