<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Lojistik, Ulaşım, Tekne, Otomobil, Tasımacılık">
    <meta name="author" content="Emre Kuru">
    <title>İletişim</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <x-navbar page="about" />

        <main>
            <div class="container text-center p-3 p-lg-4">
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                    <div class="col col-lg-6">
                        <h1>Bize mesaj atin!</h1>
                        <form action="https://formsubmit.co/info@emrlogistic.com" method="POST" id="form" autocomplete="off">
                            <div class="row g-3">
                            <div class="col">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="first name" name="Firstname"
                                    required>
                                <label for="floatingInput">Ad</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput2" placeholder="last name" name="Lastname"
                                    required>
                                <label for="floatingInput2">Soyad</label>
                                </div>
                            </div>
                            <div class="form-floating">
                                <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput3" placeholder="phone" name="Phone number"
                                    required>
                                <label for="floatingInput3">Telefon</label>
                                </div>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput4" placeholder="name@example.com" name="email"
                                required>
                                <label for="floatingInput4">Email adresi</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="message"
                                style="height: 320px" required></textarea>
                                <label for="floatingTextarea2">Mesajiniz</label>
                            </div>
                            <div class="w-100">
                                <button type="submit" class="btn btn-primary w-75">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-lg-6">
                    <h1>Konum</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24066.130590940425!2d28.380211840736333!3d41.06317079469752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b54237ff7cedab%3A0xa3cbe2b54c405216!2zQ2VsYWxpeWUsIDM0NTg0IELDvHnDvGvDp2VrbWVjZS_EsHN0YW5idWwsIFR1cmtleQ!5e0!3m2!1sen!2sca!4v1671236295176!5m2!1sen!2sca"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="card-img-top p-1 rounded-2">
                    </iframe>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title">Celaliye</h5>
                        <p class="card-text">34584 Büyükçekmece/İstanbul, Turkey</p>
                    </div>
                </div>
            </div>
        </main>   
        <x-footer/>
    </body>
</html>