<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="EMR Lojistik tekne ve yat başta olmak üzere ağır kalem lojistik işini yapmaktadır. Alanında uzman, güvenli ve hızlı">
    <meta name="keywords" content="Lojistik, Ulaşım, Tekne, Otomobil, Tasımacılık">
    <meta name="author" content="Emre Kuru">
    <title>İletişim</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css'); }}">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
  </head>
  <body>

    <x-navbar page="welcome" />

    <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner bg-dark">
          <div class="carousel-item active">
            <div class="container-lg d-flex justify-content-center justify-content-lg-end mt-3">
              <img src="{{ asset('images/header-img/img_2.jpg'); }}" class="img-fluid rounded m-3" alt="...">
            </div>

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Kapsamlı Taşımacılık</h1>
                <p>
                  Her türlü taşımacılık mevcuttur.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#info">Detaylar</a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-lg d-flex justify-content-center justify-content-lg-start mt-3">
              <img src="{{ asset('images/header-img/img_3.jpg'); }}" class="img-fluid rounded m-3" alt="...">
            </div>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Örnekler</h1>
                <p>
                  Isimizle ilgili daha fazla fotoğraf görmek için galerimize göz atın.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="{{ url('gallery') }}">Galeri</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="container marketing">
        <div class="row d-flex justify-content-center">
          <h1 class="text-center mb-5"><span class="badge bg-secondary p-3">Hizmetlerimiz</span></h1>
          <div class="col-lg-4">
            <img src="{{ asset('images/circle-img/img_1.jpg'); }}" class="rounded-circle image"  alt="...">
            <h2 class="fw-normal p-3">Otomobil Taşımacılığı</h2>
          </div>
          <div class="col-lg-4">
            <img src="{{ asset('images/circle-img/img_2.jpg'); }}" class="rounded-circle image"  alt="...">

            <h2 class="fw-normal p-3">Tekne Taşımacılığı</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <img src="{{ asset('images/circle-img/img_3.jpg'); }}" class="rounded-circle image"  alt="...">
            <h2 class="fw-normal p-3">Ağır Vasıta Taşımacılığı</h2>
          </div>
          <div class="col-lg-4">
            <img src="{{ asset('images/circle-img/img_4.jpg'); }}" class="rounded-circle image"  alt="...">
            <h2 class="fw-normal p-3">Showroom Taşımacılığı</h2>
          </div>
        </div>
        <hr class="featurette-divider" />
        <div class="row">
          <h1 class="text-center" id="info">Hakkimizda</h1>
          <p class="lead text-center">
            Şirketimiz EMR Lojistik 1997’den bu yana tekne ve yat başta olmak üzere ağır kalem lojistik işini yapmaktadır.
            Alanında uzmanlaşmış ekibiyle birlikte ürününüzün güvenli bir şekilde karşı tarafa ulaşmasının güvencesini EMR
            Lojistik olarak garanti ederiz. Başarıyla yapılan müşteri ilişkileri yönetimi ile uzun dönemli müşteri
            memnuniyetini sağlamayı ilke edinen EMR Lojistik, yönetim ve kalite departmanlarının organizasyon yapısı
            sayesinde müşteri istek ve beklentilerine mümkün olan en kısa zamanda cevap verebilmekte, esnek çözümler
            üreterek fark yaratabilmektedir.
          </p>
        </div>
        <hr class="featurette-divider" />
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
              Güvenli
              <span class="text-muted"> ve </span>
              Hizli
            </h2>
            <p class="lead">
              Bütün otomobil taşımacılığını en hızlı ve güvenli bir biçimde karsilamaktayiz. Ayrıca ağır vasıta
              taşımacılığı olarak kamyon, kepçe ve forklift tasimicaligi seceneklerimiz de mevcuttur. Tarım makinaları da
              (Traktör, vesaire.) bu listeye dahildir. Daha fazla bilgi için bizemle iletişime geçebilirsiniz.
            </p>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('images/body-img/img_1.jpg'); }}" class="img-fluid w-100 h-100 rounded" alt="...">
          </div>
        </div>
        <hr class="featurette-divider" />
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">
              Denizden karaya
              <span class="text-muted">...</span>
            </h2>
            <p class="lead">
              Özenle, küçükten büyüğe hertürlü tekne ve yat taşımacılığımız mevcuttur. Daha fazla bilgi için bize
              sorabilirsiniz.
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/body-img/img_2.jpg'); }}" class="img-fluid w-100 h-100 rounded" alt="...">
          </div>
        </div>
        <hr class="featurette-divider" />
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">
              VİZYON - <span class="text-muted">MİSYON</span>
            </h2>
            <p class="lead">
              Misyonumuz lojistik sektöründe Türkiye'nin ve Avrupa'nın önde gelen firmaları içinde yer almaktır.
              Envanterimizde bulunan kamyon ve araçlara yaptığımız yatırımları sürdürerek büyümek, büyürken müşteri
              beklentilerinin üzerinde bir toplam kalite anlayışıyla taşımacılık yaparak bizimle çalışan herkese artı
              değer sağlamaktır.
            </p>
          </div>
          <div class="col-md-5">
            <img src="{{ asset('images/body-img/img_3.jpg'); }}" class="img-fluid w-100 h-100 rounded" alt="...">
          </div>
        </div>
        <hr class="featurette-divider" />
      </div>
    </main>

    <x-footer/>
   
  </body>
</html>