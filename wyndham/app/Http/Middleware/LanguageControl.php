<?php
namespace App\Http\Middleware;
use Closure;
use Session;
class LanguageControl
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
        if(empty($request->segment(1))){
            if(!empty(Session::get('lang'))){
                \App::setLocale(Session::get('lang'));
                return redirect('/'.Session::get('lang'));
            } else {
                Session::put('lang', config('app.locale'));
                \App::setLocale(config('app.locale'));
                return redirect('/'.config('app.locale'));
            }
        }
        else if(!in_array($request->segment(1), config('app.locales'))){
            return abort(404);
        }
        Session::put('lang', $request->segment(1));
        \App::setLocale($request->segment(1));
        return $next($request);
    }
}