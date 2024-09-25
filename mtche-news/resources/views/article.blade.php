
@extends('layouts.common')
@if ($lang =='mn')
@section('og_title', $article->title_mn)
@else
@section('og_title', $article->title_jp)
@endif
@section('og_description', $article->title_jp)
@section('og_image', url('storage/' . $article->image))
@section('og_url', route('article',['id' => $article->id]))
@section('content')
  <!-- Featured 1 - Bootstrap Brain Component -->
  <section class="py-3 py-md-5 py-xl-8 bg-light">
    <div class="container">
      <div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
        <div class="col-12 col-lg-7 order-1 order-lg-0">
          <div class="entry-header mb-3">
            <ul class="entry-meta list-unstyled d-flex mb-3">
              <li>
                @if ($lang =='mn')
                <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                href="#!">{{$article->articleCategory->name}}</a>
             @else
             <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
             href="#!">{{$article->articleCategory->japanese}}</a>
               @endif
              </li>
            </ul>
            @if ($lang =='mn')
            <h2 class="display-3 fw-bold mb-4">{{$article->title_mn}}</h2>
            @else
            <h2 class="display-3 fw-bold mb-4">{{$article->title_jp}}</h2>
            @endif
          </div>
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
                  <span class="ms-2 fs-7">{{ $article->created_at->format('Y/m/d') }}</span>
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
                  <span class="ms-2 fs-7">{{ count($comments) }}</span>
                </a>
              </li>
              <span class="px-3">&bull;</span>
                    <li>
                      @if ($lang =='mn')
                      <li><a class="dropdown-item" href="{{ route('lang.switch', 'ja') }}">{{ __('menu.lang_read') }}</a></li>
                      @else
                      <li><a class="dropdown-item" href="{{ route('lang.switch', 'mn') }}">{{ __('menu.lang_read') }}</a></li>
                      @endif
                  </li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <a class="d-block bsb-hover-image overflow-hidden rounded" href="#!">
            <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
            src="{{ asset('storage/' . $article->image) }}" alt="">
              
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Main -->
  <main id="main">

    <!-- Entry Content Bootstrap Brain Component -->
    <section class="py-3 py-md-5 py-xl-10">
  <div class="container">
    <div class="row justify-content-md-center gy-3 gy-xl-4">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6 gy-3 gy-xl-4 bsb-entry-content">
        @if ($lang =='mn')
          {{$article->title_mn}}  
        @else
          {{$article->title_jp}}  
        @endif
        
        <div class="text-justify">
          @if ($lang =='mn')
            {!!$article->article!!}
          @else
            {!!$article->japanese!!}  
          @endif
        </div>
        
        <img class="img-fluid mt-3 mb-5 rounded" loading="lazy" src="{{ asset('storage/' . $article->image) }}" alt="">
        
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="dQotufLO"></script>
        <div class="fb-share-button" 
             data-href="{{ route('article', ['id' => $article->id]) }}" 
             data-layout="button_count" 
             data-size="large">
          <a target="_blank" 
             href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('article', ['id' => $article->id])) }}&src=sdkpreparse" 
             class="fb-xfbml-parse-ignore">
            Share
          </a>
        </div>            
      </div>
    </div>
  </div>
</section>
<!-- Comment Form -->
<div class="pb-3 pb-md-5 pb-xl-10">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <form id="commentForm">
          @csrf
          <input type="hidden" name="article_id" value="{{ $article->id }}"> 
          <div class="row gy-3 p-1">
            <div class="col-12">
              <label for="fullname" class="form-label">{{ __('page.name') }} <span class="text-danger">*</span></label>
              <input type="hidden" id="commentable_id" name="commentable_id" value="article">
              <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
            </div>
            <div class="col-12">
              <label for="message" class="form-label">{{ __('menu.comment') }} <span class="text-danger">*</span></label>
              <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <div class="col-12">
              <div class="d-grid">
                <button class="btn btn-primary" type="submit">{{ __('page.send') }}</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Comments Section -->
<div class="pb-3 pb-md-5 pb-xl-10">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        @if ($comments->count()>0)
        <h5 class="mb-4">{{ __('menu.comment') }}:</h5>
        @endif
        <div id="commentsContainer">
          @foreach ($comments as $comment)
          <div class="comment mb-4" style="word-wrap: break-word; overflow-wrap: break-word;">
            <p class="mb-1"><strong>{{ $comment->name }}</strong></p>
            <p class="mb-1">{{ $comment->content }}</p>
            <p class="text-muted small">{{ $comment->created_at->format('Y/m/d') }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Author 2 - Bootstrap Brain Component -->
    <section class="bsb-author-2 py-3 py-md-5 py-xl-10 bsb-section-py-xxl-1X">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8 col-xxl-7">
            <div class="card border-light-subtle p-4">
              <div class="row gy-3 align-items-center">
                <div class="col-md-8">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ __('menu.written_by') }}</h6>
                    <h3 class="card-title mb-2">
                      <a class="card-link link-dark text-decoration-none" href="#!">{{$article->writer}}</a>
                    </h3>
                    <p class="card-text mb-3">{{ __('menu.introduction') }}</p>
                    <ul class="bsb-social-media nav m-0">
                      <li class="nav-item">
                        <a class="nav-link link-dark" href="https://www.facebook.com/profile.php?id=100092676005473" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link link-dark" href="https://x.com/Mtche0501" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                              d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog 5 - Bootstrap Brain Component -->
    <section class="bsb-blog-5 py-3 py-md-5 py-xl-8 bsb-section-py-xxl-1X bg-light">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12">
            <h2 class="h4 mb-4 mb-md-5">{{ __('menu.last_news') }}</h2>
          </div>
        </div>
      </div>

      <div class="container overflow-hidden">
        <div class="row gy-4 gy-md-5 gx-xl-6 gy-xl-6 gx-xxl-9 gy-xxl-9">
          @foreach ($latestArticles as $item)
          <div class="col-12 col-lg-4">
            <article>
              <div class="card border-0 bg-transparent">
                <figure class="card-img-top mb-4 overflow-hidden bsb-overlay-hover">
                  <a href={{route('article',['id' => $item->id])}}>
                    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy"
                    src="{{ asset('storage/' . $item->image) }}" alt="">
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
                        href={{route('article',['id' => $item->id])}}>{{$item->articleCategory->name}}</a>  
                        @else
                        <a class="d-inline-flex px-2 py-1 link-accent text-accent-emphasis bg-accent-subtle border border-accent-subtle rounded-2 text-decoration-none fs-7"
                        href={{route('article',['id' => $item->id])}}>{{$item->articleCategory->japanese}}</a>
                        @endif
                       
                      </li>
                    </ul>
                    <h2 class="card-title entry-title h4 m-0">
                      @if ($lang =='mn')
                      <a class="link-dark text-decoration-none"  href={{route('article',['id' => $item->id])}}>{{$item->title_mn}}</a>
                      @else
                      <a class="link-dark text-decoration-none" href={{route('article',['id' => $item->id])}}>{{$item->title_jp}}</a>
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
                        <span class="ms-2 fs-7">{{$item->created_at->format('Y/m/d')}}</span>
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
                        <span class="ms-2 fs-7">{{ $item->comment_count }}</span>
                      </a>
                    </li>
                    <span class="px-3">&bull;</span>
                    <li>
                      @if ($lang =='mn')
                      <li><a class="dropdown-item" href="{{ route('lang.switch', 'ja') }}">{{ __('menu.lang_read') }}</a></li>
                      @else
                      <li><a class="dropdown-item" href="{{ route('lang.switch', 'mn') }}">{{ __('menu.lang_read') }}</a></li>
                      @endif
                  </li>
                  </ul>
                </div>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('commentForm').addEventListener('submit', function (e) {
      e.preventDefault();

      let formData = new FormData(this);
      
      fetch('{{ route("comment") }}', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          let newComment = `
            <div class="comment mb-4" style="word-wrap: break-word; overflow-wrap: break-word;">
              <p class="mb-1"><strong>${data.comment.name}</strong></p>
              <p class="mb-1">${data.comment.content}</p>
              <p class="text-muted small">${data.comment.created_at}</p>
            </div>
          `;
          document.getElementById('commentsContainer').insertAdjacentHTML('afterbegin', newComment);
          document.getElementById('commentForm').reset(); // フォームをリセット
        } else {
          alert('There was an error submitting your comment.');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('There was an error submitting your comment.');
      });
    });
  });
</script>