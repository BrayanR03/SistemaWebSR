<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
            'Apellidos'=>'required',
            'Nombres'=>'required',
            'Dni'=>'required',
            'FechaNacimiento'=>'required',
            'Telefono'=>'required',
            'ApoderadoID'=>'required',
            'GradoSeccionID'=>'required',
            'image'=>[$this->route('alumno')?'nullable':'required','mimes:png,jpg,jpeg']
        ];
    }

    public function messages(){

        return [

            'Apellidos.required'=>'Ingresa Datos Al Campo Apellidos',
            'Nombres.required'=>'Ingresa Datos Al Campo Nombres',
            'Dni.required'=>'Ingresa Datos Al Campo Dni',
            'FechaNacimiento.required'=>'Ingresa Datos Al Campo Fecha Nacimiento',
            'Telefono.required'=>'Ingresa Datos Al Campo Telefono',
            'ApoderadoID.required'=>'Ingresa Datos Al Campo ApoderadoID',
            'GradoSeccionID'=>'Ingresa Datos Al Campo GradoSeccionID',
            'image.required'=>'Necesitas subir una imagen',
            
            
        ];
    }
}
