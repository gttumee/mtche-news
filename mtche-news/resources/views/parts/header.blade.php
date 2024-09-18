<header id="header" class="sticky-top bsb-tpl-header-sticky bsb-tpl-header-sticky-animationX">
  <!-- Navbar 1 - Bootstrap Brain Component -->
  <nav
    class="navbar navbar-expand-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret bsb-tpl-navbar-sticky bg-white border-bottom border-light-subtle"
    data-bsb-sticky-target="#header">
    <div class="container">
      <a class="navbar-brand" href={{route('index')}} style="color: black; font-family: 'Arial', sans-serif;">
        <img src="./assets/img/branding/logo.png" class="bsb-tpl-logo" alt="">
        MTCHE Media
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('index') ? 'active' : '' }}" aria-current="page" href={{route('index')}}>{{ __('menu.home') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href={{route('about')}}>{{ __('menu.about') }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::routeIs('page') ? 'active' : '' }}" href="#!" id="categoryDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">{{ __('menu.news') }}</a>
              <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="categoryDropdown">
                @foreach($articleMenu as $article)
                @if ($lang =='mn')
                <li><a class="dropdown-item" href={{route('page',['id' => $article->id])}}>{{$article->name}}</a></li>
                @else
                <li><a class="dropdown-item" href={{route('page',['id' => $article->id])}}>{{$article->japanese}}</a></li>
                @endif
                @endforeach
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::routeIs('highlightPage') ? 'active' : '' }}" href="#!" id="blogDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">{{ __('menu.page') }}</a>
              <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="blogDropdown">
                @foreach($highlightMenu as $highlight)
                @if ($lang =='mn')
                <li><a class="dropdown-item" href={{route('highlightPage',['id' => $highlight->id])}}>{{$highlight->name}}</a></li>
                @else
                <li><a class="dropdown-item" href={{route('highlightPage',['id' => $highlight->id])}}>{{$highlight->japanese}}</a></li>
                @endif
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('send-article') ? 'active' : '' }}" href={{route('send-article')}}>{{ __('menu.register') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href={{route('contact')}}>{{ __('menu.contact') }}</a>
            </li>
            <!-- 言語選択トグル -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#!" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                言語/Хэл
              </a>
              <ul class="dropdown-menu border-0 shadow bsb-zoomIn" aria-labelledby="languageDropdown">
                <li><a class="dropdown-item" href="{{ route('lang.switch', 'ja') }}">{{ __('menu.japanese') }}</a></li>
                <li><a class="dropdown-item" href="{{ route('lang.switch', 'mn') }}">{{ __('menu.mongolian') }}</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
