<div class="col-3">
    <div class="card" style="width: 14rem; height:90%;">
        <img src="{{ asset('picture/' . $a->image) }}" class="card-img-top img-cover" alt="..."
            style="width: 100%; height: 70%; object-fit: contain;">
        <strong class="mt-2 text-center">{{$a->judul}}</strong>
        <div class="card-body">
            @if (auth()->check())
                <a href="{{ route('pesan.pinjam', $a->id) }}" class="btn btn-primary mt-1" style="display: block; margin: 0 auto;">Lihat</a>
            @else
                <a href="#" class="btn btn-primary mt-1" style="display: block; margin: 0 auto;">Login</a>
            @endif
        </div>
    </div>
</div>
