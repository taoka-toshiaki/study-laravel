<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        // $data = [
        //     'name'=>'taoka'
        // ];
        // $request->merge(['data'=>$data]);
        // return $next($request);
        $response = $next($request);
        $content = $response->content();
        $content = preg_replace("/taoka/","田岡",$content);
        $response->setContent($content);
        return $response;
    }
}
