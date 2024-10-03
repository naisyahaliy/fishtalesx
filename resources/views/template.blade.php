<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href={{asset('asset/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:lightblue;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >Fish Tales</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kategori">Kategori</a>
                    </li>
                    <li class="nav-item" style="margin-left: 500px;">
                        <a class="nav-link" href="login">Log out</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </nav>
        <div>
            @yield('content')
        </div>
    </body>
    <script src={{asset('asset/bootstrap/js/bootstrap.min.js')}}></script>