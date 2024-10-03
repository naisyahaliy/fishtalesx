<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Ikan</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <style>
         .footer {
            background-color: lightblue ;
            color:#343a40 ;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightblue;">
        <div class="container">
            <a style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color:white;" class="navbar-brand" href="#">Fish Tales</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="kategori">Kategori</a>
                    </li>
                </ul>     
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg text-white text-center py-5" style="background-color: rgb(19, 75, 94)">
        <h1>Kategori Hewan Laut</h1>
        <p>Temukan berbagai jenis Hewan Laut yang menarik</p>
    </header>

    <!-- Card Section -->
    <div class="container mt-5">
        <div class="row">
            <!-- Fish Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Moluska</h5>
                        <a href="/detailmoluska" class="btn btn-secondary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Fish Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Invertebrata</h5>
                        <a href="/invertebrata" class="btn btn-secondary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- Fish Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">vertebrata</h5>
                        <a href="/vertebrata" class="btn btn-secondary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer mt-5" style="color: rgb(78, 62, 78);">
        <p>&copy; 2024 FishTales. All Rights Reserved.</p>
        <p>Hubungi kami: FishTales@gmail.com | +62 123 4567</p>
        <p>
            <a href="#">Kebijakan Privasi</a> | 
            <a href="#">Syarat & Ketentuan</a>
        </p>
    </div>
    <script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
