{{-- resources/views/auth/register.blade.php --}}
<x-guest-layout>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1 class="text-center mb-4">Registro</h1>
                            <p class="text-medium-emphasis text-center">Crea tu cuenta para comenzar</p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                {{-- Name --}}
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                    <input id="name" type="text" 
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                                    <input id="email" type="email" 
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                    <input id="password" type="password" 
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Confirm Password --}}
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label">{{ __('Confirmar contraseña') }}</label>
                                    <input id="password_confirmation" type="password" 
                                        class="form-control" name="password_confirmation" required>
                                </div>

                                {{-- Buttons --}}
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrarse') }}
                                    </button>
                                </div>
                            </form>

                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="text-decoration-none">
                                    {{ __('¿Ya tienes cuenta? Inicia sesión') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center text-medium-emphasis mt-3">
                        <small>© {{ date('Y') }} Tu Aplicación</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>