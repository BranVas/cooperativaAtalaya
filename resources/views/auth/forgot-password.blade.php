{{-- resources/views/auth/forgot-password.blade.php --}}
<x-guest-layout>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1 class="text-center">Recuperar Contraseña</h1>
                            <p class="text-medium-emphasis text-center">Ingresa tu correo electrónico para restablecer tu contraseña</p>

                            <!-- Mensaje de éxito -->
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <!-- Errores -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autofocus>
                                </div>

                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">
                                        Enviar enlace de restablecimiento
                                    </button>
                                    <a href="{{ route('login') }}" class="btn btn-link">
                                        Volver al inicio de sesión
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</x-guest-layout>