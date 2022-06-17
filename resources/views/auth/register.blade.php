<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="" class="class=" w-20 h-20 fill-current text-gray-500"" alt="">
                home
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot De Passe')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer Le Mot De Passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>
            <!-- Select Option Rol type -->
            <div class="mt-4">
                <x-label for="role_id" value="S'Incrire Comme:" />
                <select name="role_id"
                    class="block mt-1 w-full border-gray-300
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200
                    focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="user">Utilisateur</option>
                    <option value="pharmacy">Pharmacie</option>
                </select>
            </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Déjà Incrit?
                </a>

                <x-button class="ml-4">
                    S'incrire
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
