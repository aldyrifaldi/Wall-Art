<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function respond($data,$message = null)
    {
        return ResponseBuilder::asSuccess()->withData($data)->withMessage($message)->build();
    }

    public function respondNoContent($http_code)
    {
        return ResponseBuilder::asSuccess()->withHttpCode($http_code)->build();
    }

    public function respondWithMessage($message)
    {
        return ResponseBuilder::asSuccess()->withMessage($message)->build();
    }

    public function respondWithError($api_code,$http_code)
    {
        return ResponseBuilder::asError($api_code)->withHttpCode($http_code)->build();
    }

    public function respondBadRequest($api_code)
    {
        return $this->respondWithError($api_code,Response::HTTP_BAD_REQUEST);
    }
    public function respondUnAuthenticated($api_code)
    {
        return $this->respondWithError($api_code,Response::HTTP_UNAUTHORIZED);
    }
    public function respondNotFound($api_code)
    {
        return $this->respondWithError($api_code,Response::HTTP_NOT_FOUND);
    }


}
