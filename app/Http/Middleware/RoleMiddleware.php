<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param   $role
     * @param   $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        if(!$request->user()->hasRole($role)) {
            return redirect()->route('home')->with('success', 'У вас нет доступа');
        }
        if($permission !== null && !$request->user()->can($permission)) {

            abort(404);
        }
        return $next($request);
    }
}
