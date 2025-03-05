<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {
        if(!Auth::check() ){
            return redirect()->route('login');
        }
        if($role=='everyone'){
            return $next($request);
        }
        // $role = Role::where('name','=',$role);
        if(Auth::user()->role->name != $role){
            return redirect()->route('noauthorized');
        }
        return $next($request);
    }
    public function HasPermission($role) {

    }
}
