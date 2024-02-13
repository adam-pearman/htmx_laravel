<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactBulkDeleteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'contact_ids' => ['required', 'array'],
            'contact_ids.*' => ['required', 'integer', 'exists:contacts,id'],
        ];
    }
}
