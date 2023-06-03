<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Generalsetting;


class KYC
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $value = null): Response
    {
        $gs = Generalsetting::first();
        $user = auth()->user();

        if($gs->kyc){
            if($user->kyc_status == 0 || $user->kyc_status == 2){
                $sections = explode(" , ", $gs->module_section);
                if (in_array($value, $sections)){    
                    return redirect()->route('user.dashboard')->with('warning','Update Your KYC First and wait for verification!');
                }else{
                    return $next($request);
                }
            }
            return $next($request);
        }
        return $next($request);
    }
}
