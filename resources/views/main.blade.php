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
      <!-- google font -->
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
        h1 {
          font-weight: bold;
          text-align: center;          
          padding-bottom: 1em;
        }
        .btn {
          color: white;
          background: #B08968;
        }
        a {
          text-decoration: none;
        }
        .card {
            background: transparent;
            border: transparent;
        }
        h4 {
          font-weight: bold;
          text-align: center;
          padding-top: 1em;
          padding-bottom: 1em;
        }
        .rounded-circle {
            width: 30%;
        }
        h6 {
          font-weight: bold;
          text-align: center;
          padding-top: 1em;
          padding-bottom: 1em;
          height: 4em;
        }
        .scrolling-wrapper{
          overflow-x: auto;
          overflow-y: hidden;
        }
        .card-block{
        background-position: center;
        background-size: cover;        
        padding-top: 0.7em;
      }
      /* Hide scrollbar for Chrome, Safari and Opera */
      .scrolling-wrapper::-webkit-scrollbar {
          display: none;
      }

      /* Hide scrollbar for IE, Edge and Firefox */
      .scrolling-wrapper {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
      }
      .card-title {
        font-size: 1.4vw;
      }
      .card-text {
        font-size: 1.2vw;
      }
      .more {
        font-size: 1.2vw;
      }
      .isi_act {
        background: #E6CCB3;
      }
      .modal {
        background: #E6CCB3;
        height: 100%;
      }
      .modal-content {
        background: #EDE0D4;
      }
      .modal-header{
        background: #9C6644;
        color: white;
      }
      .ratio {
        --bs-aspect-ratio: 34%;
      }
      </style>
  </head>
  <body>
<!-- navbar -->
    <nav class="navbar">
      <div class="container border-bottom">
        <a class="navbar-brand text-light" href="/">
          FOOWASFUL
        </a>
        </ul>
          <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active text-white bg-transparent" id="nav-homepage-tab" data-bs-toggle="tab" data-bs-target="#nav-homepage" type="button" role="tab" aria-controls="nav-homepage" aria-selected="true">Beranda</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-white bg-transparent" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="false">Tentang Kami</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-white bg-transparent" id="nav-masuk-tab" data-bs-toggle="tab" data-bs-target="#nav-masuk" type="button" role="tab" aria-controls="nav-masuk" aria-selected="false">Masuk</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-white bg-transparent" id="nav-daftar-tab" data-bs-toggle="tab" data-bs-target="#nav-daftar" type="button" role="tab" aria-controls="nav-daftar" aria-selected="false">Daftar</button>
          </li>
        </ul>
      </div>
    </nav>
<!-- carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- carousel item -->
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="{{ asset('img/Carousel1.png') }}" class="d-block w-100" alt="...">
      <!-- carousel caption -->
      <div class="carousel-caption d-none d-md-block top-50 start-50 translate-middle">
        <h3>Kurangi Sampah Sisa Makanan untuk Lingkungan yang Lebih Baik</h3>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{ asset('img/Carousel2.png') }}" class="d-block w-100" alt="...">
      <!-- carousel caption -->
      <div class="carousel-caption d-none d-md-block top-50 start-50 translate-middle">
        <h3>Melempar makanan sama saja dengan mencurinya dari atas meja</h3>
      </div>
    </div>
  </div>
</div>

<!-- isi -->
        <div class="tab-content" id="myTabContent">
          <!-- home -->
          <div class="tab-pane fade show active" id="nav-homepage" role="tabpanel" aria-labelledby="nav-homepage-tab">
            @include('homepage')
          </div>
          <!-- about -->
          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            @include('about')
          </div>
          <!-- masuk -->
          <div class="tab-pane fade" id="nav-masuk" role="tabpanel" aria-labelledby="nav-masuk-tab">
            @include('masuk')
          </div>
          <!-- daftar -->
          <div class="tab-pane fade" id="nav-daftar" role="tabpanel" aria-labelledby="nav-daftar-tab">
            @include('daftar')
          </div>
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
                <a class="text-light" href="https://www.instagram.com/">
                    <span class="iconify" data-icon="bi:instagram"></span>
                </a>
            </li>
            <li class="ms-1">
                <a class="text-light" href="https://web.facebook.com/">
                    <span class="iconify" data-icon="bx:bxl-facebook"></span>
                </a>
            </li>
            <li class="ms-1">
                <a class="text-light" href="https://www.whatsapp.com/">
                    <span class="iconify" data-icon="bi:whatsapp"></span>
                </a>
            </li>
        </ul>
    </footer>
    </div>
</div>
    <!-- script template -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- script to icon -->
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <!-- script to tooltips -->
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
    <!-- bootstrap script modul -->
    
      <script type="module">
        import { Toast } from 'bootstrap.esm.min.js'

        Array.from(document.querySelectorAll('.toast'))
          .forEach(toastNode => new Toast(toastNode))
      </script>
      <!-- modal script -->
    <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
      })
    </script>
    <!-- script slider -->
    <script>
      const buttonRight = document.getElementById('slideRight');
      const buttonLeft = document.getElementById('slideLeft');

      buttonRight.onclick = function () {
        document.getElementById('isi_act').scrollLeft += 250;
      };
      buttonLeft.onclick = function () {
        document.getElementById('isi_act').scrollLeft -= 250;
      };
    </script>
  </body>
</html>