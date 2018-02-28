<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Input;

class AdminProtected
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request            
     * @param \Closure $next            
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! \Session::has('id')) {
            if ($request->ajax()) {
               return Response::json(['responseMessage'=>'Access denied','response'=>url('/login')],401);
            }else{
               return redirect()->guest('/login')->withErrors(['Please login to gain access']);
            }
        }
        
        return $next($request);
    }
}