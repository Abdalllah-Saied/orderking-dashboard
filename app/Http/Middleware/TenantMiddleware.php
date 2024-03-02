<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\Tenant;

class TenantMiddleware
{
    public function handle($request, Closure $next)
    {
        $domain = $request->getHost();
        $tenant = Tenant::where('domain', $domain)->first();

        if ($tenant) {
            // Set the current tenant in the application
            config(['tenant' => $tenant]);

             $request->session()->put('tenant_id', $tenant->id);
        }

        return $next($request);
    }
}
