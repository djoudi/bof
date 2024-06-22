<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BilanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
       // return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'wilaya_id' => 'nullable',
            'commune_id' => 'nullable',
            'center_id' => 'nullable',
            'grade_id' => 'nullable',
            'date_fromation' => 'nullable',
            'type_formation' => 'nullable',
            'duree' => 'string',
            'num_total' => 'string',
            'num_male' => 'string',
            'num_fmale' => 'string',
            'responsables_formation' => 'string',
            'observations' => 'string',
            'formation' => 'string',
            'duree' => 'string',
        ];
    }
}
