<!DOCTYPE HTML>
<html>

<head>
    <title>SUTUTSLRC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">

    <link rel="icon" href="{{ asset('static/images/sututslrc.png') }}">

    <link rel="stylesheet" href="{{ asset('static/css/admin-view.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('static/css/solicitud.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    @livewireStyles
</head>

<body class="landing is-preload">

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu"></div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt="">
                    <h3>SUTUTSLRC</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
                    </div>
                </li>
                <li class="active">
                    <a href="{{ route('admin.view') }}"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.usuarios') }}"><span class="fa fa-users mr-3 notif"></span>Usuarios</a>
                </li>
                <li>
                    <a href="{{route('admin.anuncios')}}"><span class="fa fa-newspaper mr-3"></span> Anuncios</a>
                </li>
                <li>
                    <a href="{{route('admin.solicitudes')}}"><span class="fa fa-tags mr-3"></span> Solicitudes</a>
                </li>
                <li>
                    @livewire('iniciar-sesion.logout')
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container mt-2">
                {{ $slot }}


                <!-- Scripts -->
                <script src="{{ asset('static/js/jquery.min.js') }}"></script>
                <script src="{{ asset('static/js/jquery.dropotron.min.js') }}"></script>
                <script src="{{ asset('static/js/jquery.scrollex.min.js') }}"></script>
                <script src="{{ asset('static/js/browser.min.js') }}"></script>
                <script src="{{ asset('static/js/breakpoints.min.js') }}"></script>
                <script src="{{ asset('static/js/util.js') }}"></script>
                <script src="{{ asset('static/js/main.js') }}"></script>
                <script src="{{ asset('static/js/sideboot.js') }}"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
                                crossorigin="anonymous"></script>
                <script src="{{ asset('static/js/jquery.min.js') }}"></script>
                <script src="{{ asset('static/js/popper.js') }}"></script>
                <script src="{{ asset('static/js/bootstrap.min.js') }}"></script>
                <script src="{{ asset('static/js/main.js') }}"></script>


            </div>
        </div>
    </div>



    @livewireScripts

    <script>
        //Usuarios
        livewire.on('alert-user-create', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })

        livewire.on('alert-user-edit', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })

        //Anuncios
        livewire.on('alert-anuncio-create', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })
        livewire.on('alert-anuncio-edit', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })
    </script>
</body>

</html>
