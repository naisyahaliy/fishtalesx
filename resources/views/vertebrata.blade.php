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
    <h2>Vertebrata</h2>
    <p><b>Vertebrata</b>  adalah subfilum dari hewan yang memiliki tulang belakang atau kolom vertebral. Kelompok ini termasuk hewan seperti ikan, amfibi, reptil, burung, dan mamalia. Ciri utama yang membedakan vertebrata dari invertebrata (hewan tanpa tulang belakang) adalah keberadaan tulang belakang, yang berfungsi melindungi sumsum tulang belakang dan memberikan struktur pada tubuh.

    </p>

    <div class="col-lg-3 col-md-6 mb-4" style="margin-left: 5%;">
        <div class="card text-center">
            <img src="https://awsimages.detik.net.id/community/media/visual/2018/10/25/a7ae9d76-2021-43c6-96ca-3a29efc03c19.jpeg?w=600&q=90" class="card-img-top" alt="Lemon Fish">
            <div class="card-body">
                <h5 class="card-title">Macam-macam Dan Fakta Unik & Menarik Ikan-Ikan Di laut!</h5>
                <a href="/halaman2" class="btn btn-detail w-100">Lihat Detail</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4" style="margin-left: 38%; margin-top:-28%;">
        <div class="card text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Anim1018_-_Flickr_-_NOAA_Photo_Library.jpg/640px-Anim1018_-_Flickr_-_NOAA_Photo_Library.jpg" class="card-img-top" alt="Gold Fish">
            <div class="card-body">
                <h5 class="card-title">Macam-macam Fakta Unik Lumba-lumba,Yuk Caritahu!</h5>
                <a href="/halaman5" class="btn btn-detail w-100">Lihat Detail</a>
            </div>
        </div>
    </div>

<div class="col-lg-3 col-md-6 mb-4" style="margin-left: 70%; margin-top:-28%;">
    <div class="card text-center">
        <img src="https://images.theconversation.com/files/478557/original/file-20220810-18-bc4epe.jpg?ixlib=rb-4.1.0&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" class="card-img-top" alt="Yellow Gold Fish">
        <div class="card-body">
            <h5 class="card-title">Fakta Menarik Hiu di Laut, Yuk Kepoin!</h5>
            <a href="/hiu" class="btn btn-detail w-100">Lihat Detail</a>
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