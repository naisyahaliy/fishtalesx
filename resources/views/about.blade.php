<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <style>
    body {
      background-color: #f0f8ff;
    }
    .info-text {
      text-align: justify;
    }
    .seahorse-image {
      max-width: 100%;
      height: auto;
    }
    .footer {
            background-color: lightblue ;
            color:#343a40 ;
            padding: 20px 0;
            text-align: center;
        }
        section {
            padding: 20px 0;
        }
        .content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            text-align: center;
            color: #333;
        }
        .content p {
            margin-bottom: 20px;
            color: #666;
            text-align: justify;
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
                        <a style="color: white;"class="nav-link" href="kategori">Kategori</a>
                    </li>
                </ul>     
            </div>
        </div>
    </nav>

    <section class="container" style="margin-top: 8%;">
        <div class="content">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">About</h2>
           <p style="margin-top: 50px">"Di Fish Tales, kami percaya bahwa setiap hewan laut
             menceritakan kisah yang unik.
            Marilah kita jaga laut dan seluruh isinya. Dengan upaya pelestarian dan edukasi, kita dapat memastikan bahwa generasi mendatang akan terus terpesona oleh keindahan kuda laut dan merasakan keajaiban bawah laut.Mari berkontribusi dalam menjaga keseimbangan alam. Bersama-sama, kita bisa memastikan bahwa keindahan dan keanekaragaman laut tetap ada untuk dinikmati oleh generasi mendatang."</p>
        </div>
    </section>

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