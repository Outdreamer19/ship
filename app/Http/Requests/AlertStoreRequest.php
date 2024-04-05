<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlertStoreRequest extends FormRequest
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
            'tracking_number' => ['required', 'string', 'max:255'],
            'vendor' => ['required', 'string', 'max:255'],
            'weight' => ['required', 'numeric'],
            'pickup_location' => ['required'],
            'order_description' => ['required', 'string', 'max:255'],
            'courier' => ['string', 'max:225'],
            'usd_value' => ['numeric'],
            'file' => ['mimes:pdf,png,jpg', 'max:4096']
        ];
    }
}
