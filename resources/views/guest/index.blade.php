<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    @include('guest.navbar')
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner mt-5 container">
            <div class="carousel-item active">
                <img src="https://placehold.co/400x120" class="w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/400x120" class="w-100 " alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.co/400x120" class="w-100 " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="mt-5 text-center">
        <h4 class="mr-5 mb-5">Populer</h4>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('book/op.jpg') }}" class="card-img-top img-cover" alt="..."
                        style="width: 100%; height: 70%; object-fit: contain;">
                        <strong class="mt-1 text-center">Genre: Action, Comedy</strong>
                    <div class="card-body">
                        @if (auth()->check())
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Pinjam</a>
                        @else
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Login</a>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('book/op.jpg') }}" class="card-img-top img-cover" alt="..."
                        style="width: 100%; height: 70%; object-fit: contain;">
                        <strong class="mt-1 text-center">Genre: Action, Comedy</strong>
                    <div class="card-body">
                        @if (auth()->check())
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Pinjam</a>
                        @else
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Login</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('book/op.jpg') }}" class="card-img-top img-cover" alt="..."
                        style="width: 100%; height: 70%; object-fit: contain;">
                        <strong class="mt-1 text-center">Genre: Action, Comedy</strong>
                    <div class="card-body">
                        @if (auth()->check())
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Pinjam</a>
                        @else
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Login</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 14rem;">
                    <img src="{{ asset('book/op.jpg') }}" class="card-img-top img-cover" alt="..."
                        style="width: 100%; height: 70%; object-fit: contain;">
                        <strong class="mt-1 text-center">Genre: Action, Comedy</strong>
                    <div class="card-body">
                        @if (auth()->check())
                            <a href="#" class="btn btn-primary" style="display: block; margin: 0 auto;">Pinjam</a>
                        @else
                            <a href="#" class="btn btn-primary"
                                style="display: block; margin: 0 auto;">Login</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
