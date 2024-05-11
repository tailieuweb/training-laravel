<?php

namespace App\Http\Middleware;

use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function render($request, Exception $exception)
    {

        if ($exception instanceof AuthorizationException) {
            return response()->json([
                'message' => 'Not authenticated'
            ],401);
        }

        return parent::render($request, $exception);
    }
}
