<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Password;

use function Laravel\Prompts\password;

class RegisterRequest extends FormRequest
{
    use ApiResponseTrait;

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
            'name' => 'required|string|max:255' ,
            'email' => 'required|string|email|max:255|unique:users,email' ,
            'password' => ['required',"string","min:6","confirmed",Password::defults()] ,
            'phone' => 'nullable|string|max:20' ,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg,webp|max:2048'  , //max size 2MB
        ];
    }


    public function failedValidation(Validator $validator)
    {
        $response = ApiResponseTrait::errorResponse($validator->errors()->toArray(), "Validation Error", 422);
        throw new \Illuminate\Validation\ValidationException($validator, $response);

    }


    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(
    //         $this->errorResponse($validator->errors()->toArray(), "Validation Error", 422)
    //     );
    // }
}
