<?php

namespace App\Http\Middleware;

use Closure;

class TesteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd('Valor capturado pelo Middleware' . __CLASS__ . " : " . $request->id);

        if ($request->id === '123'):
            print("vou deixar passar dessa vez!");

        else:
            print("Não falou a palavra mágica!");
        endif;
        
       return $next($request);

         
    }
}
