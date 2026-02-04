<x-guest-layout>
    <div class="flex h-screen w-full">
        <!-- Left Side - Visual -->
        <div class="hidden lg:flex w-1/2 bg-blue-600 items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 to-purple-800 opacity-90"></div>
            <div class="relative z-10 text-white p-12 max-w-xl">
                <h1 class="text-5xl font-extrabold mb-6 tracking-tight">Premium Voucher</h1>
                <p class="text-xl text-blue-100 leading-relaxed font-light">
                    Manage your digital vouchers effortlessly. Access the dashboard to track sales, update products, and
                    serve customers better.
                </p>
                <div class="mt-8 flex space-x-3">
                    <div class="h-2 w-12 bg-white rounded-full opacity-50"></div>
                    <div class="h-2 w-12 bg-white rounded-full opacity-20"></div>
                    <div class="h-2 w-12 bg-white rounded-full opacity-20"></div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center bg-white p-8">
            <div class="w-full max-w-md">
                <div class="mb-10 text-center lg:text-left">
                    <a href="/" class="inline-block mb-4 text-3xl font-extrabold text-blue-600 tracking-tighter">
                        PREMIUM<span class="text-gray-800">VOUCHER</span>
                    </a>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back!</h2>
                    <p class="text-gray-500">Please sign in to access your admin dashboard.</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email Account')" class="text-gray-700 font-medium" />
                        <div class="relative mt-2">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">

                            </span>
                            <x-text-input id="email"
                                class="block w-full pl-10 border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm py-3"
                                type="email" name="email" :value="old('email')" required autofocus
                                autocomplete="username" placeholder="admin@example.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <x-input-label for="password" :value="__('Password')" class="text-gray-700 font-medium" />
                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-600 hover:text-blue-800 font-medium"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">

                            </span>
                            <x-text-input id="password"
                                class="block w-full pl-10 border-gray-300 focus:border-blue-500 focus:ring-blue-500 rounded-lg shadow-sm py-3"
                                type="password" name="password" required autocomplete="current-password"
                                placeholder="••••••••" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500 h-4 w-4"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me on this device') }}</span>
                        </label>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                            {{ __('Sign In to Dashboard') }}
                        </button>
                    </div>
                </form>

                <div class="mt-8 text-center text-sm text-gray-500">
                    &copy; {{ date('Y') }} Premium Voucher. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>