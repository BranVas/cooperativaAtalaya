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

                              <livewire:register-form />

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
