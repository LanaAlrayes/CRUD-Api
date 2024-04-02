<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'model'         => 'required',
            'brand'         => 'required|string|max:255',
            'price'         => 'required|numeric|min:100000',
            'colors'        => 'required|string|max:255',
            'gear_type'     => 'required|string|max:255',
            'year'          => 'required|numeric|min:4',
            'country'       => 'required',
        ];
    }
}
