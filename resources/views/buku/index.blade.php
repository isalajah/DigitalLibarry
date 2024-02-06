
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <a href="{{ route('buku.create') }}" class="btn btn-primary col-4 ms-3 my-4 ">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">judul</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $i => $v)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>
                                    <img src="{{ asset('picture/' . $v->image) }}" alt="" style="width: 100px">
                                </td>
                                <td>
                                    <?php
                                    $kategori = DB::table('tb_kategori')
                                        ->where('id', $v->kategori_id)
                                        ->first();
                                    echo $kategori->NamaKategori;
                                    ?>
                                </td>
                                <td>{{ $v->judul }}</td>
                                <td>{{ $v->penerbit }}</td>
                                <td>{{ $v->penulis }}</td>
                                <td>{{ $v->TahunTerbit }}</td>
                                <td>
                                    <form action="{{ route('buku.destroy', $v->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{ route('buku.edit', $v->id) }}" class="btn btn-warning">ubah</a>
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

