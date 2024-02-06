<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="{{route('ulasan.store')}}" method="post">
        @csrf
<div class="form-group mr-3 ml-3">
                            <label>Buku</label>
                            <select class="form-control" name="buku_id">
                                <option value="">Select Category</option>
                                @foreach ($buku as $k )
                                <option value="{{ $k->id }}" @if(($k->id)) @endif>{{ $k->judul }}</option>
                                @endforeach
                            </select>
             <p class="text-danger">{{ $errors->first('buku_id') }}</p>
        </div>
<div class="form-group mr-3 ml-3">
                            <label>Category Book</label>
                            <select class="form-control" name="user_id">
                                <option value="">Select Category</option>
                                @foreach ($user as $k )
                                <option value="{{ $k->id }}" @if(($k->id)) @endif>{{ $k->namaLengkap }}</option>
                                @endforeach
                            </select>
             <p class="text-danger">{{ $errors->first('user_id') }}</p>
        </div>
<div class="mb-3">
    <label for="ulasan" class="form-label">ulasan</label>
    <textarea class="form-control" name="ulasan" placeholder="Masukkan gambar Anda"></textarea>
</div>

<div class="mb-3">
<label for="rating" class="form-label">rating</label>
  <input type="text" class="form-control" name="rating" placeholder="Masukan gambar Anda">
</div>

<div class="form-group">
    <button class="btn btn-primary">Tambah</button>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>
</html>