<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title, Description, and Author -->
  <title>MTCHE Media</title>
  <meta name="description" content="MTCHE Media">
  <meta name="author" content="BootstrapBrain">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:title" content="@yield('og_title', 'MTCHE Media')">
  <meta property="og:description" content="@yield('og_description', 'Инноваци сэтгэлгээг үргэлж дэмжинэ. Бүтээмж бол амжилтын үндэс.')">
  <meta property="og:image" content="@yield('og_image', 'https://media.mtche.jp/assets/img/about/title.jpg')">
  <meta property="og:url" content="@yield('og_url', url()->current())">
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="MTCHE Media">

  <!-- Favicon and Touch Icons -->
  <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicon/favicon-512x512.png">

  <!-- Google Fonts Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="./assets/css/planet-bsb.css">

  <!-- BSB Head -->
</head>

<body>
  @include('parts.header')
  @yield('content')
  <section class="py-3 py-md-5 py-xl-10 bsb-section-py-xxl-1 bg-neutral">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-9 col-lg-8 col-xl-8 col-xxl-7">
          <h2 class="display-7 fw-bold mb-4 mb-md-5 mb-xxl-6 text-center text-accent-emphasis">{{ __('menu.mail_get') }}</h2>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7">
          <form class="row gy-3 gy-lg-0 gx-lg-2 justify-content-center" action="{{route('email')}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="col-12 col-lg-8">
              <label for="email-newsletter-component" class="visually-hidden">{{ __('page.email') }}</label>
              <input type="email" class="form-control bsb-form-control-3xl" name="email" id="email-newsletter-component" value="" placeholder="{{ __('page.email') }}" aria-label="email-newsletter-component" aria-describedby="email-newsletter-help" required>
              @if(session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif
            </div>
            <div class="col-12 col-lg-3 text-center text-lg-start">
              <button type="submit" class="btn btn-primary bsb-btn-3xl">{{ __('menu.mail_register') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  @include('parts.footer')
  <!-- Javascript Files: Vendors -->
  <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Javascript Files: Controllers -->
  <script src="./assets/controller/planet-bsb.js"></script>

  <!-- BSB Body End -->
</body>

</html>
