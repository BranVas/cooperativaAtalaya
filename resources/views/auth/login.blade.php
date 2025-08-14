<!-- resources/views/auth/login.blade.php -->
<x-guest-layout>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Iniciar sesión</h1>
                            <p class="text-medium-emphasis">Ingrese sus credenciales</p>

                            <form wire:submit.prevent="login">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input wire:model.defer="form.email" 
                                           type="email" 
                                           id="email" 
                                           class="form-control @error('form.email') is-invalid @enderror" 
                                           required autofocus>
                                    @error('form.email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input wire:model.defer="form.password" 
                                           type="password" 
                                           id="password" 
                                           class="form-control @error('form.password') is-invalid @enderror" 
                                           required>
                                    @error('form.password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Remember me -->
                                <div class="mb-3 form-check">
                                    <input wire:model="form.remember" 
                                           type="checkbox" 
                                           id="remember" 
                                           class="form-check-input">
                                    <label for="remember" class="form-check-label">Recordarme</label>
                                </div>

                                <!-- Submit -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>

                                <!-- Links -->
                                <div class="mt-3">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</x-guest-layout>