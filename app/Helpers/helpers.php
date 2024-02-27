<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists("getName")) {

    function getProfileUrl($guard)
    {
        if(Auth::guard($guard)->user()->profile_url){
            return Auth::guard($guard)->user()->profile_url;
        } else{
            return "https://api.dicebear.com/7.x/initials/svg?backgroundColor=1e88e5&seed=".Auth::guard($guard)->user()->name;
        }
    }
}


if(!function_exists(('isActive'))){
    function isActive($path) {
        if(request()->routeIs($path)){
            return 'active';
        }
    }
}




