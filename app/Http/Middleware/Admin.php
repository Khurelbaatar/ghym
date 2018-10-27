<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role;

class Admin {

            public function handle($request, Closure $next)
            {

                if ( Auth::check() && Auth::user()->isAdmin() )
                {
                    return $next($request);

                }

                return redirect('/');

            }
}
