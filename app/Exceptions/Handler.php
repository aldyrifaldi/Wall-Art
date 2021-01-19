<?php

namespace App\Exceptions;

use App\ApiCode;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Symfony\Component\HttpFoundation\Response;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request,Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            return $this->respondWithValidationError($exception);
        }

        return parent::render($request,$exception);
    }

    private function respondWithValidationError($exception)
    {
        return ResponseBuilder::asError(ApiCode::VALIDATION_ERROR)
                                ->withData($exception->errors())
                                ->withHttpCode(Response::HTTP_UNPROCESSABLE_ENTITY)
                                ->build();
    }
}
