<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $pageTitle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/template.css') }}">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" data-bs-theme="dark"> --}}
        <div class="container px-5">
            <a class="navbar-brand" href="/">
                <span class="fw-bolder">
                    <h2 class="brand purple text1">ralfazza.com</h2>
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <svg id="i-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32"
                    fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2">
                    <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item px-3"><a class="nav-link" href="/">
                            <h4>Home</h4>
                        </a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="/projects">
                            <h4 class="red">Projects</h4>
                        </a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="/gallery">
                            <h4 class="green">Gallery</h4>
                        </a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="/merch">
                            <h4 class="blue">Merch</h4>
                        </a></li>
                    <li class="nav-item px-3"><a class="nav-link" href="/cv">
                            <h4 class="orange">CV</h4>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- <div class="container">
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <h2>ralfazza.com</h2>
                </a>
                <div class="d-lg-none">
                    <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        <svg id="i-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32"
                            height="32" fill="none" stroke="currentcolor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2">
                            <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
                        </svg>
                    </button>
                </div>
                <div class="d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/projects"><h4>Projects</h4></a></li>
                        <li class="nav-item"><a class="nav-link" href="/gallery"><h4>Gallery</h4></a></li>
                        <li class="nav-item"><a class="nav-link" href="/merch"><h4>Merch</h4></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div> --}}
    {{-- <div class="container">
        <div class="collapse" id="collapseExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/projects"><h4>Projects</h4></a></li>
                <li class="nav-item"><a class="nav-link" href="/gallery"><h4>Gallery</h4></a></li>
                <li class="nav-item"><a class="nav-link" href="/merch"><h4>Merch</h4></a></li>
            </ul>
        </div>
    </div> --}}
    <div class="container py-5 main">
        @yield('main')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @yield('js')
</body>

</html>
