<?php

namespace App\Http\Middleware;

use App\Models\Payment;
use Closure;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class IsPaidMembershipFee
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $club_id = $request->route('id');
        $payment = Payment::where('user_id', \Auth::user()->id)->where('club_id', $club_id)->where('description', 'Annual Fee')->first();
        if ($payment == null) {
            return redirect()->route('user.club.payment_page', $club_id);
        }
        return $next($request);
    }
}
