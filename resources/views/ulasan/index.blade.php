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
<a href="{{route('ulasan.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Buku</th>
                <th scope="col">User</th>
                <th scope="col">ulasan</th>
                <th scope="col">rating</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ulasan as $i => $v)
            <tr>
                <td>{{$i+1}}</td>
                <td>
                     <?php
                     $buku = DB::table('tb_buku')->where('id', $v->buku_id)->first();
                     echo $buku->judul;
                     ?>
                </td>
                <td>
                     <?php
                    //  $user = DB::table('users')->where('id', $v->user_id)->first();
                    //  echo $user->namaLengkap;
                     ?>
                </td>
                <td>{{$v->ulasan}}</td>
                <td>{{$v->rating}}</td>
                <td>
                    <form action="{{route('ulasan.destroy', $v->id)}}" method="post">
                        {{csrf_field ()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{route('ulasan.edit', $v->id)}}" class="btn btn-warning">ubah</a>
                        <button class="btn btn-danger">Hapus</button>
                    </form>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>
</html>