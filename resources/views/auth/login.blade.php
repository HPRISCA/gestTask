<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center vh-100" style="background-color: #f5f5dc;">
        <div class="card shadow-lg p-4" style="width: 400px;">
            <div class="text-center">
                <i class="bi bi-person-circle" style="font-size: 4rem; color: #6c757d;"></i>
                <h3 class="mt-2">Connexion</h3>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger" />
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger" />
                </div>
                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">{{ __('Se souvenir de moi') }}</label>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                    @endif
                    <x-primary-button class="btn btn-success">{{ __('Log in') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
