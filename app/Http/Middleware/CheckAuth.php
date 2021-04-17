<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAuth
{
    public function handle(Request $request, Closure $next)
    {
        $users = session('data_login');
        if (!$users) {
            return redirect()->route('login-page');
        }
        return $next($request);
    }
}
