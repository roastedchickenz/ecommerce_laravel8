<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect_to_home()
    {
        $user_priv = Auth::user()->user_privilege;
        if($user_priv == '1')
        {
            return view('admin.admin_home');
        }
        elseif($user_priv == '0')
        {
            return view('dashboard');
        }
    }
}
