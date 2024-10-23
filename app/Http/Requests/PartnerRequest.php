<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $array = [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'status' => ['required', 'string','in:active,inactive'],
            'image' => ['required', 'image'],
        ];
        // if put change image to nullable
        if ($this->isMethod('PUT')) {
            $array['image'] = ['nullable', 'image'];
        }

        return $array;

    }
}
