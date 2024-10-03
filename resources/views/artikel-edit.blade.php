@extends('template')
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Artikel Edit
                </div>
                <div class="card-body">
                    <form action="/artikel/edit/{{$article->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group pt-2">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="{{ $article->judul }}"> 
                        </div>
                        <div class="form-group pt-2">
                                <label for="kategori">Kategori</label>
                                <select id="form-control" name="kategori" id="kategori" value="{{ $article->kategori }}">
                                    <option value="" disabled selected>Pilih kategori</option>
                                    <option value="moluska">Moluska</option>
                                    <option value="Invertebrata">Invertebrata</option>
                                    <option value="vertebrata">Vertebrata</option>
                                </select>
                        </div>
                        <div class="form-group pt-2">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="foto">
                        </div>
                        <input type="submit" class="btn btn w-100 btn-block mt-5" style="background-color: lightblue;" value="Ubah">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
