<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


class AdminAlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('LoggedAdmin') && (url(LaravelLocalization::getCurrentlocale().'/admin/login') == $request->url()  ) )
        {
            return back();
        }
        return $next($request);
    }
}
