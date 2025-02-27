<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class AutoCheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $routeName = $request->route()->getName();
        $permission = Permission::whereRaw("FIND_IN_SET('$routeName',routes)")->first();

        if ($permission) {
            if (!request()->user()->can($permission->name)) {
                // return  response()->json($permission->name);
                return abort("403");
            }
        }
        // else {
        //     return abort("403|=");
        // }
        return $next($request);
    }
}
