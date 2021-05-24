<?php

namespace App\Http\Middleware;

use App\Packages\Pessoa\Domain\Model\Pessoa;
use Closure;
use Illuminate\Http\Request;

class BindObjects
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->isMethod('POST')) {

        }

        return $next($request);
    }
}
