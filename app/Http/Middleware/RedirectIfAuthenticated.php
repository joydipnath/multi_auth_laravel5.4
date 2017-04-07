<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        //$guard = array_get($exception->guards(),0);
        
        switch ($guard) {
            case 'admin':
                // foreach ($this->guard()->user()->role as $role) {
                //     if ($role->name == 'admin') {
                //         return redirect('admin/home');
                //     }elseif ($role->name == 'editor') {
                //         return redirect('admin/editor');
                //     }
                // }
                if(Auth::guard($guard)->check()){
                   return redirect()->route('admin.home'); 
                }
                break;
                
            case 'employer':
                // foreach ($this->guard()->user()->role as $role) {
                //     if ($role->name == 'admin') {
                //         return redirect('admin/home');
                //     }elseif ($role->name == 'editor') {
                //         return redirect('admin/editor');
                //     }
                // }
                if(Auth::guard($guard)->check()){
                   return redirect()->route('employer.home'); 
                }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }


       
        return $next($request);
    }
}
