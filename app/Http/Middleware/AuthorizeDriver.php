<?php

namespace App\Http\Middleware;

use App\Driver;
use App\Traits\ApiResponse;

use Closure;

class AuthorizeDriver
{
    use ApiResponse;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = request()->header('x-api-key');
        $driver = Driver::where('api_token',$token)->first();

        if($driver)
        {
            request()->driver = $driver;
            return $next($request);
        }
        return $this->errorResponse([__('site.plz_login_first')], 401);    
    }
}
