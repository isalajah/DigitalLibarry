@include('guest.navbar')



<div class="py-12">
 
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="container">
                <div class="row">
                   <div class="position">
                    <a href="{{route('guest.userBuku')}}" class="btn btn-danger position-absolute" style="top:97px; left:220px;"> Ingin kembali ?</a>
                   </div>
                    <div class="col-md-10 mx-auto mt-5">
                        <div class="card">
                            <div class="card-header">
                                <!-- Tambahkan header card sesuai kebutuhan -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        
                                            <img src="{{ asset('picture/' . $buku->image) }}" alt=""
                                                style="width: 200px">
                                      
                                    </div>
                                    <div class="col-md-6 mx-auto">
                                        <table class="table table-bordered mt-5">
                                            <tbody>
                                                <tr>
                                                    <td>Judul</td>
                                                    <td>:</td>
                                                    <td>{{ $buku->judul }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>:</td>
                                                    <td>
                                                        <?php
                                                        $kategori = DB::table('tb_kategori')
                                                            ->where('id', $buku->kategori_id)
                                                            ->first();
                                                        echo $kategori->NamaKategori;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Penulis</td>
                                                    <td>:</td>
                                                    <td>{{ $buku->penulis }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Penerbit</td>
                                                    <td>:</td>
                                                    <td>{{ $buku->penerbit }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div style="text-align: center;">
                                            <form action="{{route('list.koleksi')}}" method="post" class="d-inline" id="listForm">
                                            @csrf
                                            
                                            <input type="hidden" name="buku_id" value="{{$buku->id}}">
                                            <button class="btn btn-primary mt-3 col-4" style="margin-right: 10px;">List</button>

                                            </form>
                                            <a href="{{ route('guest.index') }}"
                                                class="btn btn-large btn-secondary mt-3 col-4" style="margin-right: 10px;">Pinjam</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 
</div>

<h3 class="text-center mt-5">Ulasan</h3>
