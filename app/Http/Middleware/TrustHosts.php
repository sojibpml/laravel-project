<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Middleware\TrustHosts as Middleware;
use App\Models\History;
use Illuminate\Http\Request;
class TrustHosts
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function handle(Request $request, Closure $next)
    {
        History::create([
            "url" => $request->fullUrl(),
            "ip" => $request->ip(),
            "browser" => $request->userAgent(),
        ]);
        return $next($request);
    }

}
