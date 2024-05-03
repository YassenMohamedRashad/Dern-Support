<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class is_user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (isset(Auth()->user()->id) &&!Auth()->user()->is_admin) {
            return $next($request);
        }
        if (isset(Auth()->user()->id) &&Auth()->user()->is_admin) {
            return redirect("admin");
        }

        return redirect("/login");
    }
}
