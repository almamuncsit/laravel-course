<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class TestMiddleware
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
        $user = User::find(1);
        if ( 'sarkar@gmail.com' == $user->email ) {
            return $next($request);
        } else {
            return redirect()->to('/');
        }   
    }
}
