<?php

namespace App\Http\Middleware;

use Closure;

class NoSessionForBotsMiddleware
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
        if ((new \Jaybizzle\CrawlerDetect\CrawlerDetect)->isCrawler()) {
            \Config::set('session.driver', 'array');
        }

        return $next($request);
    }
}
