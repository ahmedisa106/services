<?php

if (!function_exists('aurl')) {
    function aurl($url = null)
    {
        return asset('assets/admin/' . $url);
    }
}

if (!function_exists('active')) {
    function active($route)
    {
        if (request()->segments()[0] && request()->segments()[0] == $route) {
            return 'active';
        } elseif (isset(request()->segments()[1]) && request()->segments()[1] == $route) {
            return 'active';
        } elseif (request()->route()->getName() == $route) {
            return 'active';
        } else {
            return '';
        }

    }
}

if (!function_exists('settings')) {
    function settings()
    {
        return \Modules\ConfigModule\Entities\Setting::orderBy('id', 'desc')->first();

    }//end function
}
