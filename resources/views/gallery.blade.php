<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Lojistik, Ulaşım, Tekne, Otomobil, Tasımacılık">
        <meta name="author" content="Emre Kuru">
        <title>Galeri</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
    </head>
    <body>
        <x-navbar page="gallery" />
        <main>
            <div class="container mt-3">
                <h1>Galeri</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="{{ asset('images/gallery/img1.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img1" />
                        <img src="{{ asset('images/gallery/img2.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img2" />
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('images/gallery/img3.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img3" />
                        <img src="{{ asset('images/gallery/img4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img4" />
                        <img src="{{ asset('images/gallery/img7.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img7" />
                        <img src="{{ asset('images/gallery/img8.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img8" />
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ asset('images/gallery/img5.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img5" />
                        <img src="{{ asset('images/gallery/img6.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img6" />
                        <img src="{{ asset('images/gallery/img4.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img4" />
                        <img src="{{ asset('images/gallery/img9.jpg') }}" class="w-100 shadow-1-strong rounded mb-4" alt="img9" />
                    </div>
                </div>
            </div>
        </main>
        <x-footer/>
    </body>
</html>