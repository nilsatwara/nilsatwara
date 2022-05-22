<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Webguard
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
        // if(session()->has('user-id'))
        // echo "<pre>";
        // print_r(session()->all());
            return $next($request);
        
          
            //    echo 'no accesss';
            
            

       
        return $next($request);
       
    }
}
