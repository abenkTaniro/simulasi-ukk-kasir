<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('assets/images/logo.png') }}" type="image/x-icon">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>

<body class="bg-soft-blue">
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container-fluid">
            <a href="." class="navbar-brand logo">
                <img src="{{ url('assets/images/logo.png') }}" alt=""> Uangku
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto gap-2">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link px-4 {{request()->is('home') ? 'active' : ''}}">
                            <i class="bx bxs-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('buku.index') }}" class="nav-link px-4 {{request()->is('buku') ? 'active' : ''}}">
                            <i class="bx bx-food-menu"></i> Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pasok.index') }}" class="nav-link px-4">
                            <i class="bx bx-food-menu"></i> Pasok
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kasir.index') }}" class="nav-link px-4 {{request()->is('kasir') ? 'active' : ''}}">
                            <i class="bx bx-user-pin"></i> Kasir
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard-pendapatan.html" class="nav-link px-4">
                            <i class="bx bx-money"></i> Laporan
                        </a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav me-5">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-2">
                                
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-fluid py-5 px-1 px-lg-5">
        @yield('content')
    </section>

    <footer class="pt-5 pb-4">
        <div class="container">
            <p class="mb-0 text-center text-secondary fs-7">
                Copyright &copy; PT Onlenkan Teknologi Indonesia 2024. Seluruh hak cipta dilindungi.
            </p>
        </div>
    </footer>

    <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

