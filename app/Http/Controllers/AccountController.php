<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile()
    {
        return view('auth.account.profile');
    }

    public function password()
    {
        return view('auth.account.password');
    }
}
