<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if(auth()->user()->isAdmin== 1){
            return $next($request);
        }
        return redirect('/home')->with('error', 'Mohon Maaf Anda Bukan Admin, dan Hanya Bisa Mengakses Halaman Transaksi');
    }
}
