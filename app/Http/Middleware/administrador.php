<?php

namespace App\Http\Middleware;

use Closure;

class administrador {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $n = session()->get('usu');
        //comprobar si eres administrador
        foreach ($n as $u) {
            if ($u['rol'] == 1) {
                return $next($request);
            } else {
                abort(404);
            }
        }
    }

}
