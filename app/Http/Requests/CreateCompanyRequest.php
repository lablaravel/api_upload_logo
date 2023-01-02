<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules():  mixed
    {
        return [
                'name' => 'required|min:2|max:100',
                'asn' => 'required|min:3|max:50',
                'url_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ];
    }

    /** 
     * Get he errors messagens personalized
     * 
     * @return array
    */   
    public function messages()
    {
        return [
            'name.required' => 'Digite um nome da empresa válido',
            'name.min' => 'Digite um nome com no mínimo de 2 caracteres',
            'name.max' => 'Permitido um nome apenas de 50 caracteres',
            'asn.required' => 'Digite um ASN Válido',
            'asn.min' => 'Digite um asn com no minimo 3 caracteres.',
            'asn.max' => 'Digite um asn com no máximo 50 caracteres',
            'url_logo.required' =>'Selecione uma imagem',
            'url_logo.mimes' => 'Apenas esse formato válido o png'
        ];
    }
}
