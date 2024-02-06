@extends('template.index')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">

                <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Masukan gambar Anda">
                    </div>

                    <div class="form-group mr-3 ml-3">
                        <label>Category Book</label>
                        <select class="form-control" name="kategori_id">
                            <option value="">Select Category</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}" @if ($k->id)  @endif>
                                    {{ $k->NamaKategori }}</option>
                            @endforeach
                        </select>
                        <p class="text-danger">{{ $errors->first('kategori_id') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan gambar Anda">
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">penulis</label>
                        <input type="text" class="form-control" name="penulis" placeholder="Masukan gambar Anda">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">penerbit</label>
                        <input type="text" class="form-control" name="penerbit" placeholder="Masukan gambar Anda">
                    </div>
                    <div class="mb-3">
                        <label for="TahunTerbit" class="form-label">Tahun Tenerbit</label>
                        <input type="number" class="form-control" name="TahunTerbit" placeholder="Masukan gambar Anda">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection