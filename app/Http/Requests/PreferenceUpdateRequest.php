<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreferenceUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'preferred_density' => 'max:255 ',
            'preferred_trims' => 'max:255',
            'preferred_fabrics' => 'max:255',
            'preferred_pull_settings' => 'max:255',
            'same_color_sew_our' => 'max:255',
            'preferred_formats' => 'max:255',
            'blending' => 'max:255',
            'dgt_additional_instructions' => 'max:255',
            'dgt_instructions' => 'max:255',
            'underbase' => 'max:255',
            'vector_detail_work' => 'max:255',
            'vector_file_format' => 'max:255',
            'vector_printing_process' => 'max:255',
            'vector_color_list' => 'max:255',
            'vector_separation' => 'max:255',
            'vc_additional_instruction' => 'max:255',
            'vc_instructions' => 'max:255',
        ];
    }
}
