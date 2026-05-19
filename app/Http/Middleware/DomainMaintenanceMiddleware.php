<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DomainMaintenanceMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 获取当前访问的域名
        $host = $request->getHost();

        // 5.19 uscohealth.edu.au 页面维护中。
        // 需要显示维护页面的域名
        $maintenanceDomain = 'uscohealth.edu.au';
        // 正常访问的域名
        $allowedDomain = 'uscohealth-uq74b.kinsta.app';

        if ($host === $maintenanceDomain) {
            // 如果访问 mydomain.com，返回维护视图
            return response(view('maintenance'), 503);
        }
        
        return $next($request);
    }
}
