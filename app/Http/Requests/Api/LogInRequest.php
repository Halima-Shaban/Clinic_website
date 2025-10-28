<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiResponseTrait;

class LogInRequest extends FormRequest
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
            //
             'email' => 'required|email' ,
            'password' => 'required|string' ,
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response = ApiResponseTrait::errorResponse($validator->errors()->toArray(), "Validation Error", 422);
        throw new \Illuminate\Validation\ValidationException($validator, $response);

    }

}
