
@extends('layouts.common')
@section('content')
  <!-- Featured 1 - Bootstrap Brain Component -->
  <section class="py-3 py-md-5 py-xl-8 bg-light">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12">
          <h2 class="display-3 fw-bold mb-4">{{ __('menu.about') }}</h2>
          <div class="row">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 d-flex gap-3">
              <p class="lead m-0">—</p>
              <p class="lead text-secondary m-0">{{ __('page.about') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main -->
  <main id="main">

    <!-- About 4 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-10">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0">
          <div class="col-12 col-lg-6">
            <div class="card bg-accent-subtle border-accent-subtle p-3 m-0">
              <div class="row gy-3 gy-md-0 align-items-md-center">
                <div class="col-md-5">
                  <img src="./assets/img/about/about-img-2.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body p-0">
                    <h2 class="card-title h4 mb-3">Ямар асуудал шийдэх вэ?</h2>
                    <p class="card-text">Японд амьдарч байгаа Монголчуудын асуудал бэршээлд зөвөлгөө заавар өгөх</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="card bg-primary-subtle border-primary-subtle p-3 m-0">
              <div class="row gy-3 gy-md-0 align-items-md-center">
                <div class="col-md-5">
                  <img src="./assets/img/about/about-img-1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-7">
                  <div class="card-body p-0">
                    <h2 class="card-title h4 mb-3">Хамтын ажиллагаа</h2>
                    <p class="card-text">Хамтын ажиллагаа</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter 1 - Bootstrap Brain Component -->
    <!-- Newsletter 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-10 bsb-section-py-xxl-1 bg-accent">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-9 col-lg-8 col-xl-8 col-xxl-7">
            <h2 class="display-4 fw-bold mb-4 mb-md-5 mb-xxl-6 text-center text-accent-emphasis">Манай мэдээг өөрийн
              и-мэйл хаягаар авахыг хүсвэл
              и-мэйл хаягаа бүртгүүлэнэ үү
            </h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7">
            <form class="row gy-3 gy-lg-0 gx-lg-2 justify-content-center">
              <div class="col-12 col-lg-8">
                <label for="email-newsletter-component" class="visually-hidden">и-мэйл хаяг</label>
                <input type="email" class="form-control bsb-form-control-3xl" id="email-newsletter-component" value=""
                  placeholder="И-мэйл" aria-label="email-newsletter-component" aria-describedby="email-newsletter-help"
                  required>
                <div id="email-newsletter-help" class="form-text text-center text-lg-start">Шинэ мэдээ мэдээлэл.</div>
              </div>
              <div class="col-12 col-lg-3 text-center text-lg-start">
                <button type="submit" class="btn btn-primary bsb-btn-3xl">Бүртгүүлэх</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>

@endsection