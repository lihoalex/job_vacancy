<?php declare(strict_types=1);

namespace App\Http\Requests\Api\V1\Auth;

use App\Traits\Request\RequestValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    use RequestValidationTrait;

    public function rules(): array
    {
        return [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
            'c_password' => 'required|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Incorrect Email field',
            'password.required' => 'Password is required',
            'password.min' => 'Password should has minimum 6 symbols',
            'c_password.required' => 'Confirm password field is required',
            'c_password.same' => 'Passwords dont match!',
        ];
    }
}
