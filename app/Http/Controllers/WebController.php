<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $view = 'home')
    {
        if (view()->exists("web.$view")) {
            return view("web.$view");
        }

        abort(404);
    }
}
