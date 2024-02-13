<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpsertRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'max:25'],
            'last_name' => ['required', 'max:35'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max_digits:11', 'numeric'],
        ];
    }
}
