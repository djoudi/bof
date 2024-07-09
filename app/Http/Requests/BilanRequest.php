<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

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
            'wilaya_id' => 'nullable|integer',
            'commune_id' => 'nullable|integer',
            'center_id' => 'nullable|integer',
            'grade_id' => 'nullable|integer',
            'date_fromation' => 'nullable|string',
            'type_formation' => 'nullable|string',
            'duree' => 'nullable|string',
            'num_total' => 'nullable|integer',
            'num_male' => 'nullable|integer',
            'num_fmale' => 'nullable|integer',
            'responsables_formation' => 'nullable|string',
            'observations' => 'nullable|string',
            'formation' => 'nullable|string',
        ];
    }
}
