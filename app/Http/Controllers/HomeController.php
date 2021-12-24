<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect_to_dashboard()
    {
        $user_priv = Auth::user()->user_privilege;
        if($user_priv == '1')
        {
            return view('admin.admin_dashboard');
        }
        elseif($user_priv == '0')
        {
            return view('users.user_index');
        }
    }
    public function index()
    {
        
        if(Auth::id() == '1')
        {
            return redirect ('home');
        }
        else
        {
            return view('users.user_index');

        }
    }
}
