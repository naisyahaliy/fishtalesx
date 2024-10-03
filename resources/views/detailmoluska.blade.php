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
                        <a style="color: white;"  class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;"  class="nav-link" href="kategori">Kategori</a>
                    </li>
                </ul>     
            </div>
        </div>
    </nav>
    <div class="moluska text-center">
    <h2>Moluska</h2>
    <p><b>Moluska</b> adalah kelompok hewan invertebrata yang sangat beragam dan melimpah di Bumi, terutama di lingkungan laut. Mereka memiliki tubuh lunak yang seringkali dilindungi oleh cangkang keras. Cangkang ini tidak hanya berfungsi sebagai perlindungan, tetapi juga sebagai tempat tinggal dan penunjang bentuk tubuh mereka.</p>
</div>
<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 2%;">
    <div class="card text-center">
        <img src="https://gardaanimalia.com/wp-content/uploads/2022/01/kerang-kepala-kambing-atau-moluska.jpeg" class="card-img-top" alt="Colorful Trigger Fish">
        <div class="card-body">
            <h5 class="card-title">Macam-macam Fakta Unik Kerang Laut,Yuk Caritahu!</h5>
            <a href="/halaman3" class="btn btn-detail w-100">Lihat Detail</a>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 35%; margin-top:-29%;">
    <div class="card text-center">
        <img src="https://cdn0-production-images-kly.akamaized.net/Znxf1y2dV_pXz_-1cgW6HBlRosU=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/875771/original/060102000_1431503872-cumi.png" class="card-img-top" alt="Lemon Fish">
        <div class="card-body">
            <h5 class="card-title">Fakta Unik & Menarik cumi-cumi Di laut, Yuk Caritahu!</h5>
            <a href="/halaman6" class="btn btn-detail w-100">Lihat Detail</a>
        </div>
    </div>
</div>


<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 70%; margin-top:-29%;">
    <div class="card text-center">
        <img src="https://cdn.idntimes.com/content-images/community/2021/02/ab921605-b94f-4d2a-a1798dd43488550d-source-c49ec1071c36345e43483fd0fd60d068-58aec05422855f717e40f07b384b4aab_600x400.jpg" class="card-img-top" alt="Yellow Gold Fish">
        <div class="card-body">
            <h5 class="card-title">Cek Fakta Unik & Menarik Gurita, Yuk Kepoin!</h5>
            <a href="/halaman8" class="btn btn-detail w-100">Lihat Detail</a>
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