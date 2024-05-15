<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>shopHERE</title>

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

  </head>
  <body>
    <div class="gnb">
      <div class="top flex-row">
        <div class="left flex-row">
          <li>Seller Center</li>
          <li>|</li>
          <li>Mulai Jual</li>
          <li>|</li>
          <li>Download</li>
          <li>|</li>
          <li>Ikuti kami di</li>
          <li></li>
          <i class="bi bi-facebook"></i>
          <i class="bi bi-instagram"></i>
          <i class="bi bi-person-circle"></i>
        </div>
        <div class="right flex-row">
          <li><i class="bi bi-bell"></i>Notifikasi</li>
          <li><i class="bi bi-question-circle"></i>Bantuan</li>
          <li>
            <i class="bi bi-globe"></i>Bahasa Indonesia
            <i class="bi bi-chevron-down"></i>
          </li>
          <li>Daftar</li>
          <li>|</li>
          <li>Login</li>
        </div>
      </div>
      <div class="bottom flex-row">
        <h1 style="font-size: 40px;">shopHERE</h1>
        <div class="search flex-col">
          <div class="search-box flex-row">
            <input type="text" placeholder="Cari Pakaian" />
            <button><i class="bi bi-search"></i></button>
          </div>
          <div class="tags flex-row">
            <li>Training Pria</li>
            <li>Training Wanita</li>
            <li>Kemeja Pria</li>
            <li>Kemeja Wanita</li>
            <li>Kaos</li>
            <li>Jaket</li>
            <li>Hodie</li>
          </div>
        </div>
        <div class="cart">
          <i class="bi bi-cart"></i>
        </div>
      </div>
    </div>
    <div class="category">
      <div class="category-wrap flex-col">
        <div class="category-title">KATEGORI</div>
        <div class="cards-box flex-row">
          <li class="flex-col">
            <div class="card flex-col">
              <img src="{{ asset('image/training.png')}}" />
              <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
                <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
                <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
                <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
                <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
            <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
            <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
            <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
            <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
          </li>
          <li class="flex-col">
            <div class="card flex-col">
            <img src="{{ asset('image/training.png')}}" />
                <span>Training cowo</span>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>
