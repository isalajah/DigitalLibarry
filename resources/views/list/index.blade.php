@include('guest.navbar')
<div class="container mt-5">
    <div class="row d-md-flew">
        @if ($list->isEmpty())
            <div class="col-12 text-center mt-5">
                <h5>Anda Belum Memiliki Koleksi Apapun!!!</h5>
            </div>
        @else
            @foreach ($list as $a)
                <div class="col-3">
                    <div class="card" style="width: 14rem; height:90%;">
                        <img src="{{ asset('picture/' . $a->image) }}" class="card-img-top img-cover" alt="..."
                            style="width: 100%; height: 70%; object-fit: contain;">
                        <strong class="mt-2 text-center">{{ $a->judul }}</strong>
                        <div class="card-body">

                        </div>
                        <form action="{{ route('list.destroy', $a->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger col-10" style="margin: 0 18;">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
