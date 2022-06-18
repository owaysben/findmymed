<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
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
        $data = Reserve::where('user_id', auth()->user()->id)->get()->sortBy('created_at');

        if (Auth::user()->hasRole('user')) {
            return view('user.profile', compact('data'));
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
