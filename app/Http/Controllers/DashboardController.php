<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //
    }

    public function profile()
    {
        if (Auth::user()->hasRole('user')) {
            return view('user.profile');
        } elseif (Auth::user()->hasRole('pharmacy')) {
            return view('pharmacy.profile');
        }
    }
    public function orders()
    {
        if (Auth::user()->hasRole('user')) {
            return view('user.orders');
        }
    }
}
