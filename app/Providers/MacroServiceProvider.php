<?php

namespace App\Providers;

use App\Exceptions\ApiException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;
use LaravelDoctrine\ORM\Facades\EntityManager;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function (array $data = [], string $message = '', int $httpStatus = 200) {
            $response = [];
            $response['error'] = false;
            $response['message'] = $message;
            $response['data'] = $data;
            EntityManager::flush();
            return Response::json($response, $httpStatus);
        });

        Response::macro('error', function (\Exception $exception, string $message = '', int $code = 0, int $httpStatus = 400) {
            $response = [];
            $response['error'] = true;
            $response['message'] = $message == '' ? $exception->getMessage() : $message;
            $response['code'] = $code === 0 ? $exception->getCode() : $code;
            return Response::json($response, $httpStatus);
        });

        Response::macro('validationError', function (ValidationException $validationException) {
            $response = [];
            $response['error'] = true;
            $response['message'] = 'Falha ao validar request';
            $response['data'] = $validationException->validator->errors();
            return Response::json($response, 400);
        });
    }
}
