<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

use Throwable;
use Tymon\JWTAuth\Exceptions\JWTException;

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
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        //status_code 422
        if ($exception instanceof ValidationException) {
            return response()->json([
                'status' => 2,
                'message'  => $exception->validator->getMessageBag()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        //status_code 405
        if($exception instanceof MethodNotAllowedHttpException){
            return response()->json([
                'status'=>3,
                'message'=>'Invalid method for this request!'
            ],Response::HTTP_METHOD_NOT_ALLOWED);
        }

        if ($exception instanceof ModelNotFoundException) {
            $modelName = class_basename($exception->getModel());
            $message = "Cannot find your requested {$modelName}!";
            return response()->json([
                'status' => 2,
                'message' => $message,
            ], Response::HTTP_OK);
		}
		// jwt 
		if ($exception instanceof JWTException) {
			return response(['status' => 3, 'message' => 'Token is not provided'], Response::HTTP_OK);
		}
        return parent::render($request, $exception);
    }
}
