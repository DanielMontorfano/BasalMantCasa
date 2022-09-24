<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;      //Modificadop a true para que funcione!!
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return ['codEquipo'=>'required|max:8',
                'marca'=>'required|min:3',
                'modelo'=>'required'
            
        ];
    }
    public function attributes() //Fabuloso!! personalizar mensaje
    {
        return[
            'codEquipo'=>'Codigo de equipo',
            'marca'=>'la marca',
            'modelo'=>'el modelo'
        ];
    }

    public function messages() //Mejor Aun, personalizar!!
    {
        return[
            'codEquipo.required'=>'Se necesita ingresar el codigo del Equipo',
            'marca.required'=>'Se necesita ingresar la marca del Equipo',
            'modelo.required'=>'Se necesita ingresar el modelo del Equipo'

        ];
    }
}
