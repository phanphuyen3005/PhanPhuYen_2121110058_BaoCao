<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

class LoginAdminMiddle
{
   public Function handle(Request $request,Closure $next): Response
   {
    if (!Auth::check()){
        return redirect()->route('admin.login');
    }
      return $next($request);
   }
}
