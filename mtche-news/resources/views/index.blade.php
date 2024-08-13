
@extends('layouts.common')
@section('content')
  <!-- Featured 1 - Bootstrap Brain Component -->
  <section class="py-3 py-md-5 py-xl-8 bg-light">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12">
          <h2 class="h4 mb-4 mb-md-5">{{ __('menu.page') }}</h2>
        </div>
      </div>
    </div>
  <!-- Main -->
  <div class="container">
    <article>
      <div class="card border-light-subtle">
        <div class="row g-0">
          <div class="col-12 col-md-6 order-1 order-md-0 d-flex align-items-center">
            <div class="card-body p-md-4 p-xl-6 p-xxl-9">
              <div class="entry-header mb-3">
                <ul class="entry-meta list-unstyled d-flex mb-4">
                  <li>
                    @foreach ($highlight->highligthCategory as $item)
                    @if ($lang =='mn')
                    <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                    href="#!">{{$item->name}}</a>
                    @else
                    <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                    href="#!">{{$highlight->title_jp}}</a> 
                    @endif
                    @endforeach
                  </li>
                </ul>
                <h2 class="card-title entry-title display-3 fw-bold mb-4 lh-1">
                  @if ($lang =='mn')
                  <a class="link-dark text-decoration-none" href="#!">{{$highlight->title_mn}}</a>
                  @else
                  <a class="link-dark text-decoration-none" href="#!">{{$highlight->title_jp}}</a>
                  @endif
                </h2>
              </div>
              <p class="card-text entry-summary text-secondary mb-4">
                @if ($lang =='mn')
                {{$highlight->title_mn}}
                @else
                {{$highlight->title_jp}}
                @endif
              </p>
              <div class="entry-footer">
                <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                  <li>
                    <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path
                          d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path
                          d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                      </svg>
                      <span class="ms-2 fs-7">{{$highlight->created_at->format('Y/m/d')}}</span>
                    </a>
                  </li>
                  <li>
                    <span class="px-3">&bull;</span>
                  </li>
                  <li>
                    <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path
                          d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path
                          d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                      </svg>
                        <span class="ms-2 fs-7">0</span>
                    </a>
                  </li>
                  <li>
                    <span class="px-3">&bull;</span>
                  </li>
                  <li>
                    <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="fas fa-book" viewBox="0 0 16 16">
                        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                      </svg>
                        <span class="ms-2 fs-7">{{ __('menu.lang_read') }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex">
            <img class="img-fluid rounded-end object-fit-cover" loading="lazy"
              src="./assets/img/featured/featured-img-1.jpg" alt="Entrepreneurship">
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- Main -->
<main id="main">

  <!-- Blog 5 - Bootstrap Brain Component -->
  <section class="bsb-blog-5 py-3 py-md-5 py-xl-8 bsb-section-py-xxl-1">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12">
          <h2 class="h4 mb-4 mb-md-5">{{ __('menu.last_news') }}</h2>
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
      <div class="row gy-4 gy-md-5 gx-xl-6 gy-xl-6 gx-xxl-9 gy-xxl-9">
        @foreach ($article as $item)
        <div class="col-12 col-lg-4">
          <article>
            <div class="card border-0 bg-transparent">
              <figure class="card-img-top mb-4 overflow-hidden bsb-overlay-hover">
                <a href="#!">
                  <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                    src="./assets/img/blog/blog-img-1.jpg" alt="Living">
                </a>
                <figcaption>
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                    <path
                      d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path
                      d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg>
                  <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">{{ __('menu.detail_view') }}</h4>
                </figcaption>
              </figure>
              <div class="card-body m-0 p-0">
                <div class="entry-header mb-3">
                  <ul class="entry-meta list-unstyled d-flex mb-3">
                    <li>           
                      @if ($lang =='mn')
                      <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                      href="#!">{{$item->articleCategory->name}}</a>  
                      @else
                      <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                      href="#!">{{$item->articleCategory->japanese}}</a> 
                      @endif
                    </li>
                  </ul>
                  <h2 class="card-title entry-title h4 m-0">
                    @if ($lang =='mn')
                    <a class="link-dark text-decoration-none" href="#!">{{$item->title_mn}}</a>
                    @else
                    <a class="link-dark text-decoration-none" href="#!">{{$item->title_jp}}</a>
                    @endif
                  </h2>
                </div>
              </div>
              <div class="card-footer border-0 bg-transparent p-0 m-0">
                <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                  <li>
                    <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path
                          d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path
                          d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                      </svg>
                      <span class="ms-2 fs-7">{{ $item->created_at->format('Y/m/d') }}</span>
                    </a>
                  </li>
                  <li>
                    <span class="px-3">&bull;</span>
                  </li>
                  <li>
                    <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                        class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path
                          d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path
                          d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                      </svg>
                      <span class="ms-2 fs-7">1000</span>
                    </a>
                  </li>
                  <li>
                    <span class="px-3">&bull;</span>
                  </li>
                  <li>
                    <a class="link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <span class="ms-2 fs-7">{{ __('menu.lang_read') }}</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
           
          </article>
        </div>
        @endforeach
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col text-center">  
          <a href="#!" class="btn bsb-btn-2xl btn-primary rounded-pill mt-5 mt-xl-10">{{ __('menu.more_detail') }}</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter 1 - Bootstrap Brain Component -->
  <section class="py-3 py-md-5 py-xl-10 bsb-section-py-xxl-1 bg-accent">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-9 col-lg-8 col-xl-8 col-xxl-7">
          <h2 class="display-5 fw-bold mb-4 mb-md-5 mb-xxl-6 text-center text-accent-emphasis">{{ __('menu.mail_get') }}
          </h2>
      </div>
      
      </div>
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7">
          <form class="row gy-3 gy-lg-0 gx-lg-2 justify-content-center">
            <div class="col-12 col-lg-8">
              <label for="email-newsletter-component" class="visually-hidden">{{ __('page.email') }}</label>
              <input type="email" class="form-control bsb-form-control-3xl" id="email-newsletter-component" value=""
                placeholder="{{ __('page.email') }}" aria-label="email-newsletter-component" aria-describedby="email-newsletter-help"
                required>
            </div>
            <div class="col-12 col-lg-3 text-center text-lg-start">
              <button type="submit" class="btn btn-primary bsb-btn-3xl">{{ __('menu.register') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection