
@extends('layouts.common')
@section('content')
  <!-- Featured 1 - Bootstrap Brain Component -->
  <section class="py-3 py-md-5 py-xl-8 bg-light">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12">
          <h2 class="display-3 fw-bold mb-4">{{ __('menu.register') }}</h2>
          <div class="row">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 d-flex gap-3">
              <p class="lead m-0">—</p>
              <p class="lead text-secondary m-0">Доорх формоор холбоо барина уу</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main -->
  <main id="main">


    <section class="py-3 py-md-5 py-xl-10">
      <div class="container">
        <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center">
          @if (session('success'))
          <div class="alert alert-success">
          {{ session('success') }}
          </div>
          @endif
          <div class="col-12 col-lg-6">
            <div class="border overflow-hidden">
              <form action="{{route('article-request')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                  <div class="col-12">
                    <label for="fullname" class="form-label">{{ __('menu.article_title') }} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="article_title" name="article_title" value="" required>
                  </div>
                  <div class="col-12">
                    <label for="subject" class="form-label">{{ __('menu.article_image') }}</label>
                    <input type="file" class="form-control" id="article_image" name="article_image">
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label">{{ __('menu.article_aritcle') }} <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="article_aritcle" name="article_aritcle" rows="10" required></textarea>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">{{ __('page.name') }}   <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm4-3a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
                          <path d="M8 9a5.978 5.978 0 0 0-4.528 2.09C3.16 12.26 3 13.185 3 14v1h10v-1c0-.815-.16-1.74-.472-2.91A5.978 5.978 0 0 0 8 9zm0 1a4.978 4.978 0 0 1 3.39 1.356C11.915 11.824 12 12.418 12 14H4c0-1.582.085-2.176.61-2.644A4.978 4.978 0 0 1 8 10z"/>
                        </svg>
                      </span>
                      <input type="text" class="form-control" id="name" name="name" value="">
                    </div>                    
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">{{ __('page.email') }}  <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-envelope" viewBox="0 0 16 16">
                          <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                      </span>
                      <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">{{ __('page.send') }}</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                    <div class="mb-4 mb-md-5">
                        <div class="mb-3 text-accent">
                            <!-- アイコンを本のアイコンからペンのアイコンに変更 -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.146.854a.5.5 0 0 1 .708 0l2.292 2.292a.5.5 0 0 1 0 .708L2.5 16H0v-2.5L12.146.854zM11.207 3L13 4.793 4.5 13.293 2.707 11.5 11.207 3zm1.086-1.086L10.793 3.707 2 12.5V14h1.5L13 3.207l-.707-.707z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="mb-2">{{ __('menu.article_title_motto') }}</h4>
                            <hr class="w-50 mb-3 border-dark-subtle">
                            <p class="m-0 text-secondary">{{ __('menu.arcitle_content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
      </div>
    </section>
  </main>

@endsection