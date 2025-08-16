
 <div id="sidebar" class="sidebar mini">
        {{-- <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar"> --}}
            <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
                <li class="nav-item">
    <a class="nav-link" href="index.html">
        <svg class="nav-icon">
            <use xlink:href="/icons/sprites/free.svg#cil-speedometer"></use>
        </svg>
        <span class="nav-text">Dashboard </span>
        <span class="badge badge-sm bg-info ms-auto">NEW</span>
    </a>
</li>
                <li class="nav-title">MODULOS</li>
                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                        <svg class="nav-icon">
                            <use xlink:href="/icons/sprites/free.svg#cil-puzzle"></use>
                        </svg> Registros</a>
                    <ul class="nav-group-items compact">

                        <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"><span
                                        class="nav-icon-bullet"></span></span> Tables</a></li>
                        <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span
                                    class="nav-icon"><span class="nav-icon-bullet"></span></span> Tooltips</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                        <svg class="nav-icon">
                            <use xlink:href="/icons/sprites/free.svg#cil-cursor"></use>
                        </svg> Reportes</a>
                    <ul class="nav-group-items compact">
                        <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span
                                    class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons</a></li>

                        <li class="nav-item"><a class="nav-link"
                                href="https://coreui.io/bootstrap/docs/components/loading-buttons/"
                                target="_blank"><span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                                E.E
                                <svg class="icon icon-sm ms-2">
                                    <use xlink:href="/icons/sprites/free.svg#cil-external-link"></use>
                                </svg><span class="badge badge-sm bg-danger ms-auto">Mensaje proocional</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
            {{-- footer de la barra lateral --}}
            <div class="sidebar-footer border-top d-none d-md-flex">
            </div>
        {{-- </div> --}}
    </div>
    @vite(['resources/js/myjs/adaptacionLateral.js', 'resources/css/mycss/adaptacionLateral.css']) <!-- estilos/js -->

