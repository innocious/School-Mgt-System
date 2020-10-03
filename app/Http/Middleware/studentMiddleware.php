<?php

namespace App\Http\Middleware;

use Closure;

class studentMiddleware
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
        
        if($request->password == "1111" &&  $request->useradmin == "Admin")
        {
         return redirect('/admin');
        }
        else if($request->Spassword == "2222" ){
         return redirect('/studentLogin');
        }
        else if($request->Tpassword == "3333" ){
           return redirect('/teacherLogin');
          }
        else{
           return $next($request);
        }
    }
}
