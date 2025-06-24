<x-guest-layout>
    <style>form {
    background: #fff;
    padding: 32px 24px;
    border-radius: 10px;
    box-shadow: 0 2px 16px rgba(0,0,0,0.08);
    max-width: 400px;
    margin: 40px auto;
}
form div {
    margin-bottom: 18px;
}
input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 16px;
    transition: border 0.2s;
}
input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
    border: 1.5px solid #6366f1;
    outline: none;
}
label {
    font-weight: 500;
    margin-bottom: 6px;
    display: block;
    color: #374151;
}
.x-input-error {
    color: #dc2626;
    font-size: 13px;
    margin-top: 4px;
}
.x-primary-button {
    background: #6366f1;
    color: #fff;
    border: none;
    padding: 10px 22px;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.2s;
}
.x-primary-button:hover {
    background: #4f46e5;
}
a.underline {
    color: #6366f1;
    text-decoration: underline;
    margin-right: 12px;
}</style>
    <form method="POST" action="{{ route('user.register') }}">
        @csrf
        <!-- Validation Errors -->
@if ($errors->has('user_email'))
    <span class="text-danger">{{ $errors->first('user_email') }}</span>
@endif
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="user_email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('admin_login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>