<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
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
            $product_from_db = products::all(); 
            return view('users.user_index', compact('product_from_db'));
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
            $product_from_db = products::all(); 
            return view('users.user_index', compact('product_from_db'));

        }
    }

    public function add_to_cart($id, Request $request)
    {
        if(Auth::id())
        {
            

        }
        else
        {
            return redirect('login');
        }

    }



}
