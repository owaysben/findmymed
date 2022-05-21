<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole($request->role_id);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function edit()
    {
        if (Auth::user()->hasRole('user')) {
            return view('user.editprofile')->with('user', auth()->user());
        } elseif (Auth::user()->hasRole('pharmacy')) {

            return view('pharmacy.editprofile')->with('user', auth()->user());
        }
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $user->name = $request->name;
        $user->number = $request->number;
        $user->adresse = $request->adresse;
        $user->save();
        // session()->flash('success', 'Utilisateur mis à jour avec succés');

        if (Auth::user()->hasRole('user')) {
            return redirect(route('user.profile'))->with('success', 'Profile updated!');
        } elseif (Auth::user()->hasRole('pharmacy')) {

            return redirect(route('pharmacy.profile'))->with('success', 'Profile updated!');
        }
    }
}
