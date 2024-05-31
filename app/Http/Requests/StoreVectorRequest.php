<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVectorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'po' => 'required|string|max:255',
            'placement' => 'required|string|max:255',
            'width' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'no_of_colors' => 'required|numeric|max:100',
            'febric_color' => 'required|string|max:255',
            'trapping' => 'required|integer',
            'psd_color' => 'required|string|max:255',
            'amount_of_details' => 'required|string|max:255',
            'color_type' => 'required|string|max:255',
            'separation' => 'required|string|max:255',
            'picture' => 'required',
            'picture.*' => 'mimes:png,jpg,pdf'
        ];
    }
}
