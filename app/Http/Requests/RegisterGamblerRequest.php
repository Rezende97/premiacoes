<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterGamblerRequest extends FormRequest
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
            "name"         => ['required', 'max:150', 'string'],
            "cpf"          => ['required', 'max:14', 'string'],
            "email"        => ['required', 'max:150', 'string'],
            "dateOfBirth"  => ['required', 'string'],
            "password"     => ['required', 'max:50', 'string'],
            "telephone"    => ['required', 'max:11', 'string'],
            "pix_key"      => ['required', 'max:14', 'string'],
        ];
    }
}
