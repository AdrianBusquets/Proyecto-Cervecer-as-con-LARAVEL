<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BreweryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=> 'required|min:2|max:30',
            'description'=> 'required|min:25',
            'place'=> 'required',
            'latitude'=> 'required',
            'longitude'=> 'required'
        ];
    }

    
    public function messages()
    {
        return [
            'name'=>[
                'required'=> 'El nombre es obligatorio',
                'min'=> 'El nombre debe tener al menos 2 caracteres',
                'max'=> 'El nombre no debe sobre pasar los 30 caracteres'
            ],
            'description'=>[
                'required'=> 'La descripción es obligatoria',
                'min'=> 'La descripción debe tener al menos 25 caracteres'
            ],
            'place'=> 'La localidad es obligatoria',
            'latitude'=> 'La latitud es obligatoria',
            'longitude'=> 'La longitud es obligatoria'
        ];
    }
}
