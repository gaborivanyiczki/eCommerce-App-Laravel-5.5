<?php

namespace App\Http\Controllers;

use App\Settings;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $settings = Settings::all()->first();

        View::share('settings', $settings);

        $this->middleware(function ($request, $next) {
            view()->share('signed_in', Auth::check());
            view()->share('user',  Auth::user());

            return $next($request);
        });
    }
}
