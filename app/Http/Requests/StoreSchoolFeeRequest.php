<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolFeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role == "ADMIN";
    }

    public function attributes()
    {
        return [
            'year' => 'tahun',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'year' => ['required', 'numeric', 'digits:4'],
            'nominal' => ['required', 'numeric', 'min:0'],
        ];
    }
}
