<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\GeneralSetting;

class Otp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $gs = GeneralSetting::first();
        $user = auth()->user();
        if($gs->two_factor && $user->twofa){
            if($user->verified == 0){
                return redirect()->route('user.otp');
            }
            return $next($request);
        }

        return $next($request);
    }
}
