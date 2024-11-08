<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role == 'manager') {
            return redirect()->route('manager.dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->route('user.dashboard');
        } elseif ($user->role == 'subscriber') {
            return redirect()->route('subscriber.dashboard');
        }
        return $next($request);
    }
}
