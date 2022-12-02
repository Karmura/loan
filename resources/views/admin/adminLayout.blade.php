<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movie Website Project</title>

    <!-- Bootstrap CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('asset/css/adminstyles.css') }}" />

    {{-- Fontawesome v6.1.0 --}}
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">


    @include('admin.adminNav.navbar')

    <div id="layoutSidenav">

        @include('admin.adminNav.sidebar')

        <div id="layoutSidenav_content">
            <main>

                @yield('content')


            </main>


            @include('admin.adminNav.footer')
        </div>

    </div>







    {{-- Bootstrap 5.1.3 --}}
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}

    <!-- Custom JS -->
    <script src="{{ asset('asset/js/scripts.js') }}"></script>
</body>
</html>
