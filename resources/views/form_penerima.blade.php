<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

      <title>FOOWASFUL</title>

      <!-- styling css bootstrap-->
      <style>
        .navbar {
          background: #9C6644;
        }
        body{
          background: #EDE0D4;
        }
        .footer {
          background: #9C6644;
        }
        .row {
          height: 145em;
        }
        @media (max-width: 600px) {
            .row {
            height: 180em;
          }
        }
      </style>
  </head>
  <body>
<!-- navbar -->
    <nav class="navbar">
      <div class="container">
        <a class="navbar-brand text-light" href="/">
          FOOWASFUL
        </a>
      </div>
    </nav>
<!-- carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- carousel item -->
    <div class="carousel-item active">
      <img src="{{ asset('img/Carousel1.png') }}" class="d-block w-100" alt="...">
      <!-- carousel caption -->
      <div class="carousel-caption d-none d-md-block top-50 start-50 translate-middle">
        <h3>Kurangi Sampah Sisa Makanan untuk Lingkungan yang Lebih Baik</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/Carousel2.png') }}" class="d-block w-100" alt="...">
      <!-- carousel caption -->
      <div class="carousel-caption d-none d-md-block top-50 start-50 translate-middle">
        <h3>Melempar makanan sama saja dengan mencurinya dari atas meja</h3>
      </div>
    </div>
  </div>
</div>

<!-- isi -->
<div class="container row mx-auto">
  <!-- embed form -->
  <iframe class="py-5" src="https://docs.google.com/forms/d/e/1FAIpQLSct82lAwA_YxAaSz_LfY6gbRtMhs4oCxQh6TsXLMC7PumZixQ/viewform?embedded=true">Loading…</iframe>
</div>

<!-- footer -->
<div class="footer">
    <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3">
        <div class="col-md-4 d-flex align-items-center">
        <span class="text-light">&copy; 2021 Foowasful. All right reserved</span>
        </div>
        <!-- link media social -->
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-1">
                <a class="text-light" href="#">
                    <span class="iconify" data-icon="bi:instagram"></span>
                </a>
            </li>
            <li class="ms-1">
                <a class="text-light" href="#">
                    <span class="iconify" data-icon="bx:bxl-facebook"></span>
                </a>
            </li>
            <li class="ms-1">
                <a class="text-light" href="#">
                    <span class="iconify" data-icon="bi:whatsapp"></span>
                </a>
            </li>
        </ul>
    </footer>
    </div>
</div>
    <!-- script template -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>