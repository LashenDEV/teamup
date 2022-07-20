<?php

namespace App\Http\Middleware;

use App\Models\Clubs;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsClubCreated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Clubs::where('president_id', Auth::user()->id)->exists()) {
            return redirect()->route('president.club.index');
        }
        return $next($request);
    }
}
