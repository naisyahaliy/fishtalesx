<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Website</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: white; margin-top: 1%;" class="navbar-brand mr-5" href="#"><b>Fish Tales</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mt-2 ml-4">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/kategori">Kategori</a>
                    </li>
                    <li class="nav-item" style="margin-left: 500px;">
                        <a style="color: white;" class="nav-link" href="login">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="vidio">
         <video width="100%" height="10%" autoplay muted controls >
        <source src="videos/video.mp4.mp4" type="video/mp4">
    </video>

    <div class="judul" style="background-color: rgb(242, 247, 248);">
        <h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-left:30%;">Welcome To FishTales</h1>
        <h5 style="font-family: 'Courier New', Courier, monospace; margin-top:3%; margin-left:19%;">"Laut Adalah Jiwa Bumi, dan Hewan-Hewan Laut adalah Penjaganya"</h5>
        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left:2%; ">Di balik setiap ombak yang memecah, tersembunyi kehidupan yang tak terhitung jumlahnya — dari paus raksasa hingga terumbu karang kecil, laut adalah rumah bagi makhluk hidup yang mempesona dan misterius. Namun, seiring berjalannya waktu, ancaman terhadap ekosistem laut terus meningkat: plastik yang mencemari lautan, perburuan yang membahayakan populasi ikan, dan perubahan iklim yang merusak habitat bawah air.</p>
        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left:2%; ">Di sinilah perjalanan Anda dimulai. Website ini adalah pintu masuk ke dunia yang tak banyak diketahui, namun sangat penting bagi keseimbangan planet kita. Di sini, Anda dapat menjelajahi fakta-fakta menarik tentang hewan laut, mempelajari ancaman yang mereka hadapi, dan menemukan bagaimana Anda dapat membantu menyelamatkan kehidupan laut yang tak ternilai ini.</p>
        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left:2%; ">Kami percaya bahwa setiap individu memiliki peran dalam menjaga laut tetap sehat. Dengan tindakan sederhana seperti mengurangi sampah plastik, mendukung konservasi, atau menyebarkan kesadaran, kita semua bisa menjadi agen perubahan bagi laut dan seluruh ekosistem yang bergantung padanya. Ingat, apa yang terjadi di laut berpengaruh langsung pada kehidupan kita di darat. Kita terhubung lebih dari yang kita sadari.</p>
        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left:2%; ">Mari berkontribusi dalam menjaga keseimbangan alam. Bersama-sama, kita bisa memastikan bahwa keindahan dan keanekaragaman laut tetap ada untuk dinikmati oleh generasi mendatang.</p>

        <h5 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-left:2%; ">Yuk baca artikel ini untuk menemani masa gabut mu!</h5>

        <h5 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ; margin-left:2%; ">"Apakah Anda menikmati layanan kami? Tulis ulasan dan bantu pengguna lain menemukan yang terbaik!"</h5>
         {{-- <a href="/review"><button style="background-color: lightblue; margin-left:10%; " type="button">Review</button></a> --}}

         <form action="/review" method="post">
            <a style="margin-left: 78%; margin-top:-5%;" href="/review" class="btn btn-primary">Review</a>
        </form>

         <div class="review">
            <div class="container mt-5">
                <h5>Reviews</h5>
            
                <div class="card mb-4" style="background-color: rgb(185, 196, 199);">
                  <div class="card-header">readers' reviews</div>
                  
                  <div class="card-body">
                <div class="review-box">
                    @foreach ($review as $key => $item)
                <p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:20px;">Name:  <p>{{$item->name}}</p></p>
                <p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:20px;">Review:  <p>{{$item->review}}</p></p>
                <p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:20px;">Rating:   <p>{{$item->rating}}</p></p><hr>
                        
                    @endforeach
                </div>
                  </div>
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
