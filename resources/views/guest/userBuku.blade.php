@include('guest.navbar')
<div class="container mt-4">
    
    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search...">
    <datalist id="datalistOptions">
      
    </datalist>
    <div class="row d-md-flew mt-5">
        @foreach ($buku as $a)
            @include('card')
        @endforeach
    </div>
</div>
