<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\HasBuilder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    use HasBuilder;

    public function create(): View
    {
        return view('auth.login');
    }
}
