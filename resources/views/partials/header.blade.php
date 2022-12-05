<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travell-In</title>
</head>

<body>
    <header class="navbar-sticky sticky-top header-static">
        <nav class="navbar navbar-expand-xl py-4 px-5 bg-self">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold text-white" href="/">Travell-In</a>
                <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="uil uil-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                    <div>
                        <p></p>
                    </div>
                    <div class="wrapper-item">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item px-3">
                                <a class="fw-semibold  nav-link {{ $title === 'Dashboard' ? 'nyala' : '' }}"
                                    href="/">Home</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="fw-semibold nav-link {{ $title === 'Artikel' ? 'nyala' : '' }}"
                                    href="/posts">Artikel</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="fw-semibold nav-link {{ $title === 'Galeri' ? 'nyala' : '' }}"
                                    href="/galeri">Galeri</a>
                            </li>
                        </ul>
                    </div>

                    <ul class="navbar-nav">
                        @auth

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-link dropdown-toggle fw-semibold" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown">
                                    Halo, {{ auth()->user()->username }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dashboard" class="dropdown-item"><i class="uil uil-user"></i> Profile</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger"><i
                                                    class="uil uil-signout"></i> Logout</a></button>
                                        </form>
                                </ul>
                            </li>
                        @else
                            <div role="search">
                                <a href="/login" class="me-3 text-decoration-none text-white fw-semibold ">Login</a>
                                <a href="/register"><button class="btn btn-outline-primary"><i
                                            class="bi bi-box-arrow-in-right"></i> Sign Up</button></a>
                            </div>

                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>
