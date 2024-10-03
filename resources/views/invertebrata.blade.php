<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <title>detail</title>
    <style>
        .featured-products .card {
            border: none;
        }
        .featured-products .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-img-top{
         border-top-left-radius: 15px;
         border-top-right-radius: 15px;
        }
        .card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
        .btn-detail {
            background-color: rgb(57, 176, 216);
            color: black;
        }
        .btn-detail:hover {
            background-color: rgb(21, 21, 153);
        }
        .footer {
            background-color: lightblue ;
            color:#343a40 ;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
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
                        <a style="color: white;"class="nav-link" href="kategori">Kategori</a>
                    </li>
                </ul>     
            </div>
        </div>
    </nav>

    <div class="moluska text-center">
    <h2>Invertebrata</h2>
    <p><b>Invertebrata</b> adalah istilah yang digunakan untuk menyebut semua hewan yang tidak memiliki tulang belakang. Jadi, jika suatu hewan tidak memiliki tulang punggung yang menyusun kerangka tubuhnya, maka hewan tersebut dapat digolongkan sebagai invertebrata.</p>

<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 5%;">
    <div class="card text-center">
        <img src="https://tambakmilenial.com/wp-content/uploads/2022/10/jenis-lobster-laut-dan-harganya-1024x655.webp" class="card-img-top" alt="Colorful Trigger Fish">
        <div class="card-body">
            <h5 class="card-title">Macam-macam Fakta Unik Udang,Yuk Caritahu!</h5>
            <a href="/halaman7" class="btn btn-detail w-100">Lihat Detail</a>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 38%; margin-top:-28%;">
    <div class="card text-center">
        <img src="https://asset.kompas.com/crops/0QuehL22Sii0l8YTbuTlhCXEsIA=/252x127:1779x1146/1200x800/data/photo/2022/09/30/63369d9620270.jpg" class="card-img-top" alt="Gold Fish">
        <div class="card-body">
            <h5 class="card-title">Macam-macam Fakta Unik Bintang Laut,Yuk Caritahu!</h5>
            <a href="/halaman" class="btn btn-detail w-100">Lihat Detail</a>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 70%; margin-top:-28%;">
    <div class="card text-center">
        <img src="https://asset.kompas.com/crops/196qe9XJfWxiKAPGRYX_1Gx3XRE=/20x0:1278x839/1200x800/data/photo/2023/11/27/65641d5251701.jpg" class="card-img-top" alt="Yellow Gold Fish">
        <div class="card-body">
            <h5 class="card-title">Fakta Menarik Ubur-Ubur di Laut, Yuk Kepoin!</h5>
            <a href="/halaman4" class="btn btn-detail w-100">Lihat Detail</a>
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