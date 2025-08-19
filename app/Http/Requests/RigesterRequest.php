<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RigesterRequest extends FormRequest
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
            'name' => ["required", "string", "min:3", "max:20"],
            "email" => ["required", "email", "unique:Users,email"],
            "phone" => ["required"],
            "image" => ["nullable", "image", "mimes:png,jpg,jpeg,gif,webp", "max:2048"],
            "password" => ["required", "string", "confirmed", Password::defaults()]
        ];
    }
}
