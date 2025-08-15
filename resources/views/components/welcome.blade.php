@extends('layouts.app') {{-- O tu layout principal de CoreUI --}}

@section('content')
<div class="c-body">
    <main class="c-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <strong>Dashboard</strong>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bienvenido, {{ Auth::user()->name }}!</h5>
                            <p class="card-text">
                                Este es tu panel principal. Aquí puedes colocar estadísticas, gráficos o tus componentes Livewire.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Ejemplo de fila de cards --}}
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                            <p class="card-text">Cantidad total de usuarios: {{ \App\Models\User::count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Trabajadores</h5>
                            <p class="card-text">Cantidad total de trabajadores: {{ \App\Models\Trabajador::count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
@endsection