<?php

namespace App\Http\Middleware;

use Closure;
use \Session;
use App;
use \Config;
use App\Services;

class Language
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

        if(\Session::has('locale')){
            $locale = Session::get('locale', Config::get('app.locale'));

        }else{
            $locale = 'en';
        }
        $res = Services::all();
        Session(['service' => $res]);
        App::setlocale($locale);
        return $next($request);
    }

}
