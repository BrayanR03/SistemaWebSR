<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApoderadoRequest extends FormRequest
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
             'UsuarioID'=>'required',
             'image'=>[$this->route('apoderado')?'nullable':'required','mimes:png,jpg,jpeg']
         ];
     }
 
     public function messages(){
 
         return [
 
             'Apellidos.required'=>'Ingresa Datos Al Campo Apellidos',
             'Nombres.required'=>'Ingresa Datos Al Campo Nombres',
             'Dni.required'=>'Ingresa Datos Al Campo Dni',
             'FechaNacimiento.required'=>'Ingresa Datos Al Campo Fecha Nacimiento',
             'Telefono.required'=>'Ingresa Datos Al Campo Telefono',
             'UsuarioID.required'=>'Ingresa Datos Al Campo UsuarioID',
             'image.required'=>'Necesitas subir una imagen',
             
             
         ];
     }
}
