<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Locale;

class SetApplicationLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = Locale::getPrimaryLanguage(
            Locale::acceptFromHttp(
                $request->header('Accept-Language')
            )
        );

        $locale = $request->header('x-accept-language') ?: request()->query('language', $locale);



        if (in_array($locale, collect(config('locales.languages'))->map->value->toArray())) {
            app()->setLocale($locale);
            Carbon::setLocale($locale);
        }

        return $next($request);
    }
}
