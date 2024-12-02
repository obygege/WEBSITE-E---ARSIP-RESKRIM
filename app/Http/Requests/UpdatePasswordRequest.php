<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Pastikan hanya pengguna yang terautentikasi yang bisa mengakses
    }

    public function rules(): array
    {
        return [
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'confirmed'], // Tidak ada batasan panjang
        ];
    }

    public function messages(): array
    {
        return [
            'current_password.required' => 'Kata sandi lama harus diisi.',
            'new_password.required' => 'Kata sandi baru harus diisi.',
            'new_password.confirmed' => 'Kata sandi baru dan konfirmasi kata sandi tidak cocok.',
        ];
    }
}
