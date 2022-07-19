<?php declare(strict_types=1);

namespace App\Traits\Request;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

trait RequestValidationTrait
{
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors(),
            ],
            Response::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
