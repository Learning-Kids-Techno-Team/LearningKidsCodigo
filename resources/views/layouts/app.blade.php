
<div>
    <nav class="navbar navbar-light navbar-expand-md shadow-sm " id="navbar">
        <div class="container">

            <a  class="navbar-brand"> <!-- href="{{ url('/') }}" -->

                <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" width="110">
            <!-- {{ config('app.name','Inicio') }}-->

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- lista  de clases -->
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/pantallaPrincipalDeLaClaseDeEspañol') }}">Español</a></li>
                    <li class="nav-item"><a class="nav-link  active" href="{{ url('/pantallaClaseMat') }}">Matemáticas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/pantallaPrincipalDeCienciasNaturales') }}">Ciencias Naturales</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/pantallaPrincipalDeLaClaseDeCienciasSociales') }}">Ciencias Sociales</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/pantallaIngles') }}">Inglés</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/tecnologia') }}">Tecnología</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/acerca') }}">Acerca de la Página</a></li>

                    <!-- Authentication Links -->

                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

</div>

