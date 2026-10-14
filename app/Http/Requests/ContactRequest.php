<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    protected $redirectRoute = 'contact';

    protected function getRedirectUrl(): string
    {
        return route('contact').'#contact-feedback';
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120', 'not_regex:/[\r\n]/'],
            'company' => ['nullable', 'string', 'max:160'],
            'email' => ['required', 'string', 'email:rfc', 'max:254'],
            'phone' => ['nullable', 'string', 'max:40'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            'website' => ['nullable', 'string', 'max:0'],
        ];
    }

    public function messages(): array
    {
        return ['website.max' => 'Please leave the website field empty.'];
    }
}
