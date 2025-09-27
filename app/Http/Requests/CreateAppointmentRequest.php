<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
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
            'patient_name' => 'required|string|max:255',
            'patient_phone' => 'required|string|max:22',
            'patient_email' => 'required|email',
            'appointment_date' => 'required|after:now',
            'doctor_id' => 'required|exists:doctors,id',
        ];
    }
}
