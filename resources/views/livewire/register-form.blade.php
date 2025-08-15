<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-header">
            <h4 class="card-title mb-0">Registro de Usuario</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="register">

                {{-- Nombres --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombres</label>
                    <input type="text" wire:model="nombre" id="nombre" class="form-control" placeholder="Nombres">
                    @error('nombre') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Apellidos --}}
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" wire:model="apellidos" id="apellidos" class="form-control" placeholder="Apellidos">
                    @error('apellidos') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- DNI --}}
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" wire:model="dni" id="dni" class="form-control" placeholder="DNI">
                    @error('dni') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>
  {{-- Tipo de usuario --}}
                <div class="mb-3">
                    <label for="tipo_usuario_id" class="form-label">Tipo de Usuario</label>
                    <select id="tipo_usuario_id" wire:model="tipo_usuario_id" class="form-select">
                        <option value="">Seleccione...</option>
                        @foreach (\App\Models\TipoUsuario::all() as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->cargo }}</option>
                        @endforeach
                    </select>
                    @error('tipo_usuario_id') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Nombre de usuario --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de usuario</label>
                    <input type="text" wire:model="name" id="name" class="form-control" placeholder="Nombre de usuario">
                    @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" wire:model="email" id="email" class="form-control" placeholder="Correo">
                    @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Contraseña --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" wire:model="password" id="password" class="form-control" placeholder="Contraseña">
                    @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                </div>

                {{-- Confirmar contraseña --}}
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input type="password" wire:model="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmar contraseña">
                </div>

              
                

                {{-- Botón Registrar --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

            </form>

            {{-- Mensaje de éxito --}}
            @if (session()->has('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</div>