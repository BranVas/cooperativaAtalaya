<form wire:submit.prevent="login">
    @csrf
    {{-- Email --}}
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" wire:model="email">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Password --}}
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
            wire:model="password">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Botón --}}
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
    {{-- recuperar contraseña --}}

    <div class="d-flex justify-content-between align-items-center mt-3">
        <div>
            <a href="{{ route('password.request') }}" class="small">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</form>
