 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aesthetic Dashboard</title>
  <link rel="stylesheet" href={{asset('asset/bootstrap/css/bootstrap.min.css')}}>
  <style>
    body {
      background-color: #f7f7f7;
      font-family: 'Poppins', sans-serif;
    }

    .sidebar {
      height: 100vh;
      background-color: rgb(109, 157, 173);
      color: white;
    }

    .sidebar a {
      color: white;
      padding: 15px;
      display: block;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #2e59d9;
    }

    .content {
      padding: 30px;
    }

    .card {
      border-radius: 20px;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .navbar {
      background-color: #fff;
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 sidebar d-flex flex-column">
      <h4 class="text-center my-4" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Dashboard Fish Tales</h4>
    <img src="https://cdn.pixabay.com/photo/2018/11/13/21/43/avatar-3814049_640.png" style="width: 45px; border-radius:50px;">
    <p style="margin-left: 50px; margin-top:-45px;">Fish Tales</p>
    <div class="gmail" style="margin-left: 50px; margin-top:-15px;">
    <h5 style="font-size: 12px;">FishTales@gmail.com</h5>
    </div>
      <a href="dshbd">Home</a>
      <a href="kategori">Kategori</a>
      <a href="setting">Settings</a>
      <a href="login">Log Out</a>
    </div>

    <div class="col-md-10">

        <div class="container" style="margin-top: 150px;">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div class="container pt-5">
                        @if (Session::has('pesan'))
                            <div class="alert">{{ Session::get('pesan')}}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <a href="artikelcreate" class="btn" style="background-color: lightblue; color:black;">Tambah Data</a>
                            </div>
                            <div class="col-md-6">
                                <form action="/artikel/search" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" name="cari" class="form-control" placeholder="Search">
                                        <button class="btn" type="submit" style="background-color: lightblue; color:black;">Go</button>
                                    </div>
                                </form>
                            </div>
                        </div>
    
                        <table class="table" style="background-color: lightblue;">
                            <thead class="table-primary" style="background-color: lightblue;">
                                <tr>
                                    <th>NO</th>
                                    <th>JUDUL</th>
                                    <th>KATEGORI</th>
                                    <th>FOTO</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($article as $key => $item)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 50px; height:50px; border-radius:20px;"></td>
                                        <td>
                                            <a href="/artikel/delete/{{ $item->id }}" onclick="return window.confirm('yakin hapus data ini?')" class="btn btn-danger">Delete</a>
                                            <a href="/artikel/edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
      </nav>

      <script src={{asset('asset/bootstrap/js/bootstrap.min.js')}}></script>
</body>
</html>
