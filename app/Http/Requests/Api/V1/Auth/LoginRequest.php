<?php declare(strict_types=1);

namespace App\Http\Requests\Api\V1\Auth;

use App\Traits\Request\RequestValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use RequestValidationTrait;

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Incorrect Login field',
            'password.required' => 'Password is required',
        ];
    }
}
