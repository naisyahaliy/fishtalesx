<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <style>
        /* .logo img {
             width: 60px; 
             border-radius: 50%;
             height: auto; 
             margin: 20px 0;
        } */

        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: rgb(43, 125, 153);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-container button:hover {
            background-color: lightblue;
        }
        .login-container .signup-link {
            display: block;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(177, 159, 138);">
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('images/logoo.jpg') }}" alt="logo">
            <a href="#" class="navbar-brand">Celestial Parfumes</a>
        </div>
    </nav> --}}
    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-seccess">{{Session::get('pesan')}}</div>
        @endif
        <div class="login-container" style="margin-left: 35%;">
            <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Login To Fish Tales</h2>
            <form action="/dshbd" method="get">
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <a href="/dshbd"><button type="submit">Login</button></a>
                <a style="font-size: small;" href="#" class="signup-link">Don't have an account? Sign up</a>
            </form>
        </div>
    </div>

</body>
</html>
<script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>