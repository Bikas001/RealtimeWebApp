<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

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

        $this->renderable(function (TokenBlacklistedException $e, $request) {
            return response(['errors'=> 'Token can not be Used, get new one'], 500);
        });

        $this->renderable(function (TokenInvalidException $e, $request) {
            return response(['errors'=> 'Token is invalid'], 500);
        });
        $this->renderable(function (TokenExpiredException $e, $request) {
            return response(['errors'=> 'Token Expired get new One'], 500);
        });
        $this->renderable(function (JWTException $e, $request) {
            return response(['errors'=> 'Token is not Provided'], 500);
        });



    }
}
