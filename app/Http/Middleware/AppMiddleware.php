<?php

namespace App\Http\Middleware;

use Closure;

class AppMiddleware
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
        // echo $_SERVER['REQUEST_URI']; отслеживаем путь
        $ur= $_SERVER['REQUEST_URI'];
        if($ur=='/register'){
            return redirect('/login');  
        }
        if($ur=='/'){
            $ur_name='главная';
            }else{
                $ur_name='неизвестная';
            }
            $request->merge(compact('ur_name'));
        return $next($request);
    }
}
