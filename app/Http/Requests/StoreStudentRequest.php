<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->role == "ADMIN";
    }

    public function attributes(): array
    {
        return [
            'name' => 'nama',
            'address' => 'alamat',
            'phone' => 'nomor telepon',
            'grade_id' => 'kelas',
            'school_fee_id' => 'spp',
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
            'nisn' => ['required', 'digits:10', 'unique:students,nisn'],
            'nis' => ['required', 'digits:8', 'unique:students,nis'],
            'name' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'grade_id' => 'required',
            'school_fee_id' => 'required',
        ];
    }
}
