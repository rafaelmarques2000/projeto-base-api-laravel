<?php

namespace App\Exceptions\Service;

use App\Exceptions\Handler;
use Doctrine\ORM\EntityNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class HandlerService
{
    /**
     * @param Throwable $exception
     */
    public static function treatException(Request $request, Throwable $exception, Handler $handlerInstance)
    {
        if ($exception instanceof EntityNotFoundException) {
            return response()->error($exception, 'Registro não encontrato no banco de dados', 1621481657);
        }

        if ($exception instanceof ValidationException) {
           return response()->validationError($exception);
        }

        return $handlerInstance->render($request, $exception);
    }

}
