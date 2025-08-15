<!-- resources/views/auth/login.blade.php -->
<x-guest-layout>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-6 col-lg-5">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1 class="text-center mb-4">Iniciar sesión</h1>
                            <p class="text-medium-emphasis text-center">Ingrese sus credenciales</p>

                               <livewire:login-form />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</x-guest-layout>