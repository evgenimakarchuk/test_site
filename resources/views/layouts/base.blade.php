<!DOCTYPE html>
<html lang="ru">

<head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="description" content="{{config('base.description')}}">
  
  <title>{{config('base.name','Название')}}</title>

  @section('styles')
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="{{asset('public/fontawesome-free-5.12.0-web/css/all.min.css')}}" rel="stylesheet">    
  @show

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <div class="navbar-brand js-scroll-trigger" >    
        <svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M9.646 3.146a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5h-4.5a.5.5 0 01-.5-.5v-4H9v4a.5.5 0 01-.5.5H4a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6zM4.5 9.707V16H8v-4a.5.5 0 01.5-.5h3a.5.5 0 01.5.5v4h3.5V9.707l-5.5-5.5-5.5 5.5z" clip-rule="evenodd"></path>
          <path fill-rule="evenodd" d="M15 4.5V8l-2-2V4.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"></path>
        </svg>
      </div>

      <a class="navbar-brand js-scroll-trigger" 
                                      href="/">{{__('base.page-top')}}</a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" 
                                  href="/#about">{{__('base.about')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" 
                                href="/#services">{{__('base.services')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" 
                                href="/#products">{{__('base.products')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" 
                      href="{{asset('contact')}}">{{__('base.contact')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" 
                      href="{{asset('about')}}">{{__('base.about us')}}</a>
          </li>

        </ul>
      </div>
    </div>
    <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
      @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('base.login') }}</a>
        </li>
      @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">{{ __('base.register')}}</a>
        </li>
      @endif
      @else
        <li class="nav-item dropdown nav-link">
          <svg class="bi bi-person" width="2em" height="2em" viewBox="0 0 20 20" 
               fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15 16s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002zM5.022 15h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C13.516 12.68 12.289 12 10 12c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002zM10 9a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" 
                  clip-rule="evenodd"></path>
          </svg>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="/home">{{ Auth::user()->name=__('base.name') }}</a>
        </li>
 
        
        <li class="nav-item dropdown">        
          <a id="navbarDropdown" 
             class="nav-link dropdown-toggle" 
             href="#" role="button" data-toggle="dropdown" 
             aria-haspopup="true" 
             aria-expanded="false" 
             v-pre><span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" 
               aria-labelledby="navbarDropdown">
            <a class="dropdown-item" 
               href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">{{ __('base.logout')}}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" 
                  style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      @endguest
    </ul>
    <div class="dropdown open">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" 
                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">{{ __('base.lang')}}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/?lang=en">en</a>
        <a class="dropdown-item" href="/?lang=ru">ru</a>
        <a class="dropdown-item" href="/?lang=by">by</a>
      </div>
    </div>
  </nav>
  
@yield('content')

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Авторское право &copy; Ваш Сайт 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  @section('scripts')
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  @show
</body>

</html>
