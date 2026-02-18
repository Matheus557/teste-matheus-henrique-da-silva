<x-guest-layout>
    <div class="w-full max-w-md mx-auto">
        <!-- Header -->
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-bold text-white mb-2">{{ __('Create Account') }}</h1>
            <p class="text-gray-400">{{ __('Join us today') }}</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" class="text-gray-200" />
                <x-text-input 
                    id="name" 
                    class="block mt-2 w-full bg-gray-800 border border-gray-700 text-white placeholder-gray-500 rounded-lg focus:border-indigo-500 focus:ring-indigo-500" 
                    type="text" 
                    name="name" 
                    :value="old('name')" 
                    placeholder="John Doe"
                    required 
                    autofocus 
                    autocomplete="name" 
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

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
                    autocomplete="new-password" 
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-200" />
                <x-text-input 
                    id="password_confirmation" 
                    class="block mt-2 w-full bg-gray-800 border border-gray-700 text-white placeholder-gray-500 rounded-lg focus:border-indigo-500 focus:ring-indigo-500"
                    type="password"
                    name="password_confirmation" 
                    placeholder="••••••••"
                    required 
                    autocomplete="new-password" 
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Register Button -->
            <button type="submit" class="w-full px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                {{ __('Register') }}
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

            <!-- Login Button -->
            <a 
                href="{{ route('login') }}" 
                class="w-full flex items-center justify-center px-4 py-2.5 bg-gray-800 hover:bg-gray-700 border border-gray-700 text-gray-200 font-semibold rounded-lg transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900"
            >
                {{ __('Already registered?') }}
            </a>
        </form>
    </div>
</x-guest-layout>
