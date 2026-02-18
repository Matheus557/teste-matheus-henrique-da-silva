<x-guest-layout>
    <div class="w-full max-w-md mx-auto">
        <!-- Session Status -->
        <x-auth-session-status class="mb-6" :status="session('status')" />

        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-bold text-white mb-2">{{ __('Welcome Back') }}</h1>
            <p class="text-gray-400">{{ __('Sign in to your account') }}</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-gray-200" />
                <x-text-input 
                    id="email" 
                    class="block mt-2 w-full bg-gray-800 border border-gray-700 text-white placeholder-gray-500 rounded-lg focus:border-indigo-500 focus:ring-indigo-500" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    placeholder="you@example.com"
                    required 
                    autofocus 
                    autocomplete="username" 
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" class="text-gray-200" />
                <x-text-input 
                    id="password" 
                    class="block mt-2 w-full bg-gray-800 border border-gray-700 text-white placeholder-gray-500 rounded-lg focus:border-indigo-500 focus:ring-indigo-500"
                    type="password"
                    name="password"
                    placeholder="••••••••"
                    required 
                    autocomplete="current-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="rounded bg-gray-800 border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                        name="remember"
                    >
                    <span class="ms-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-400 hover:text-indigo-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 rounded" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <!-- Login Button -->
            <button type="submit" class="w-full px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                {{ __('Log in') }}
            </button>

            <!-- Divider -->
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-700"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-900 text-gray-400">{{ __('or') }}</span>
                </div>
            </div>

            <!-- Sign Up Button -->
            <a 
                href="{{ route('register') }}" 
                class="w-full flex items-center justify-center px-4 py-2.5 bg-gray-800 hover:bg-gray-700 border border-gray-700 text-gray-200 font-semibold rounded-lg transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900"
            >
                {{ __('Sign up') }}
            </a>
        </form>
    </div>
</x-guest-layout>
