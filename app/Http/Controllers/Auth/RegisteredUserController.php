<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\Pharmacy;
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
        if ($user->hasRole('pharmacy')) {
            $pharmacy = Pharmacy::firstOrCreate([
                'name' => $user->name,
                'user_id' => auth()->user()->id
            ]);
        }

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
        $pharmacy = Pharmacy::where('user_id', auth()->user()->id,)->first();
        //$newImageName = uniqid() . '-' . $user->name . '.' . $request->image->extension();
        //$request->image->move(public_path('images'), $newImageName);

        $user->name = $request->name;
        $user->number = $request->number;
        $user->adresse = $request->adresse;
        //$user->image = $newImageName;
        $user->save();
        if ($user->hasRole('pharmacy')) {
            $pharmacy->name = $request->name;
            $pharmacy->address = $request->adresse;
            $pharmacy->save();
        }
        // session()->flash('success', 'Utilisateur mis à jour avec succés');

        if (Auth::user()->hasRole('user')) {
            return redirect(route('user.profile'))->with('success', 'Utilisateur mis à jour avec succés');
        } elseif (Auth::user()->hasRole('pharmacy')) {

            return redirect(route('pharmacy.profile'))->with('success', 'Utilisateur mis à jour avec succés');
        }
    }
};
