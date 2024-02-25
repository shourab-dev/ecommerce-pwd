<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';
    function adminLogin()
    {
        return view('auth.login');
    }
    function adminLoginAuth(Request $request)
    {
        return $this->login($request, 'admin');
    }
    function adminLogout(Request $request)
    {
        return $this->logout($request, 'admin');
    }


}
