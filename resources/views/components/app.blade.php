      <!DOCTYPE html>
      <html lang="en">

      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">


            {{-- CSRF TOKEN --}}
            <meta name="csrf-token" content="{{ csrf_token() }}">

            {{-- ICON --}}
            {{-- ... --}}
            <link rel="icon" href="{{ url('/storage/assets/Social-Event.svg') }}" type="image/x-icon">

            <title>Social Event 2023 Alam Sutera</title>

            <!-- Scripts -->
            @vite(['resources/js/app.js'])
      </head>


      <body style="background: #FFF5F5;overflow-x:hidden">
            <div id="app">
                  <nav id="navbarGuest" class="navbar navbar-expand-md fixed-top py-0 d-none d-lg-block">
                        <div class="container-fluid px-5 py-0">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="/storage/logo/SE_ALS_2023.svg" alt="Social Event" width="200">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto">
                                  <li class="nav-item dropdown">

                                    <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                        {{-- <a class="dropdown-item" href="/">
                                            {{ __('Home') }}
                                        </a> --}}
                                        <li class="dropdown-sm-item m-0 py-lg-0 px-lg-3 px-0 py-2 fw-semibold">
                                          <a class="text-decoration-none text-pink text-end m-0 p-0" href="#about">About</a>
                                        </li>
                                        <li class="dropdown-sm-item m-0 py-lg-0 px-lg-3 px-0 py-2 fw-semibold">
                                          <a class="text-decoration-none text-pink text-end m-0 p-0" aria-current="page" href="#listofevents">Event</a>
                                        </li>

                                        <li class="dropdown-sm-item m-0 py-lg-0 px-lg-3 px-0 py-2 fw-semibold">
                                          <a class="text-decoration-none text-pink text-end m-0 p-0" href="#donation">Donation</a>
                                        </li>
                                        @auth
                                        <a id="navbarDropdown" class="dropdown-toggle dropdown-sm-item m-0 py-lg-0 px-lg-3 px-0 py-2 fw-semibold text-decoration-none" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end p-1 border-0 shadow-sm rounded-3" style="font-size: 14px">
                                          <li>
                                              <a class="dropdown-item p-2 rounded-3" href="{{ route('dashboard.index') }}">{{ __('Dashboard') }}</a>
                                          </li>
                                          <li>
                                              <a href="{{ route('logout') }}" type="button" class="dropdown-item p-2 rounded-3"
                                                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                  {{ __('Logout') }}
                                              </a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                              </form>
                                          </li>
                                        </ul>
                                        @endauth
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                        </div>
                  </nav>
                  <nav id="navbarGuest" class="navbar navbar-expand-md bg-white fixed-top py-0 d-block d-lg-none">
                      <div class="container-fluid px-5 py-0">
                          <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                              <img src="/storage/logo/SE_ALS_2023.svg" alt="Social Event" width="200">
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown">

                                  <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                      {{-- <a class="dropdown-item" href="/">
                                          {{ __('Home') }}
                                      </a> --}}
                                      <li class="dropdown-sm-item m-0 py-lg-0 px-lg-0 px-sm-3 px-3 py-2 text-lg-start fw-semibold">
                                        <a class="text-decoration-none text-pink text-end m-0 p-0" href="#about">About</a>
                                      </li>
                                      <li class="dropdown-sm-item m-0 py-lg-0 px-lg-0 px-sm-3 px-3 py-2 text-lg-start fw-semibold">
                                        <a class="text-decoration-none text-pink text-end m-0 p-0" aria-current="page" href="#listofevents">Event</a>
                                      </li>
                                      
                                      <li class="dropdown-sm-item m-0 py-lg-0 px-lg-0 px-sm-3 px-3 py-2 text-lg-start fw-semibold">
                                        <a class="text-decoration-none text-pink text-end m-0 p-0" href="#donation">Donation</a>
                                      </li>
                                      @auth
                                      <a id="navbarDropdown" class="dropdown-toggle dropdown-sm-item m-0 py-lg-0 px-lg-0 px-sm-3 px-3 py-2 text-lg-start fw-semibold text-decoration-none" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                      </a>
                                      <ul class="dropdown-menu dropdown-menu-end p-1 border-0 shadow-sm rounded-3" style="font-size: 14px">
                                        <li>
                                          <a class="dropdown-item p-2 rounded-3" href="{{ route('dashboard.index') }}">{{ __('Dashboard') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" type="button" class="dropdown-item p-2 rounded-3"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                      </ul>
                                      @endauth
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                      </div>
                  </nav>

                  <main>
                  {{ $slot }}
                  </main>
                  <section id="footer">
                        <footer class="sticky-bottom text-light mt-3 text-center">
                          <div class="container-fluid pb-3 " style="background-color:#ff88ac">

                            <div class="row">

                              <div class="col-md-4 col-xs-12 mt-4">

                                <img src="{{url('./storage/assets/bnec-logo-white_1.svg')}}" alt="" class="bnec-logo" style="width:65%">
                                <br>
                                <div class="copyright mt-4 fw-semibold">
                                    &#169 2023 BNEC Alam Sutera
                                </div>
                              </div>

                              <div class="col-md-4 col-xs-12 mt-4 me-lg-3">
                                <img src="{{url('./storage/assets/se_logo.svg')}}" alt="" class="img-fluid me-lg-5 pt-1 resp-logo">
                                <br>
                                <div class="socmed mt-3 d-flex justify-content-md-between justify-content-center ps-5 px-lg-5 mt-4 mt-lg-0 mx-5 pb-2 pt-lg-3">
                                    <a href="https://www.mybnec.org/" target="_blank">
                                        <img src="{{url('./storage/assets/footer_web.svg')}}" alt="" class="pe-2">
                                    </a>
                                    <a href="https://www.youtube.com/@BINUSEnglishClubChannel" target="_blank">
                                        <img src="{{url('./storage/assets/footer_youtube.svg')}}" alt="" class="pe-2">
                                    </a>
                                    <a href="https://open.spotify.com/show/1MJOZj6e8eCI9FWxLZmVqh" target="_blank">
                                        <img src="{{url('./storage/assets/footer_spotify.svg')}}" alt="" class="pe-2">
                                    </a>
                                    <a href="https://www.instagram.com/bnecalamsutera/" target="_blank">
                                        <img src="{{url('./storage/assets/footer_instagram.svg')}}" alt="" class="pe-2">
                                    </a>
                                </div>
                              </div>

                              <div class="col-md-3 col-xs-12 text-light ps-md-5 mt-4 ms-lg-2 text-lg-start text-center">
                                <div style="font-size:40px" class=" fs-4 my-2 fw-semibold">Contact Us</div>
                                <div class="cp d-flex justify-content-lg-start justify-content-center align-items-center py-2  text-lg-start text-center" style="">
                                    <img src="{{url('./storage/assets/cp_name.svg')}}" alt="" class="">
                                    <p class="ps-2 m-0">Severine</p>
                                </div>
                                <div class="cp d-flex justify-content-lg-start justify-content-center align-items-center py-2" style="">
                                    <img src="{{url('./storage/assets/cp_line.svg')}}" alt="" class="">
                                    <p class="ps-2 m-0">severinebp.</p>
                                </div>
                                <div class="cp d-flex justify-content-lg-start justify-content-center align-items-center py-2" style="">
                                    <img src="{{url('./storage/assets/cp_wa.svg')}}" alt="" class="">
                                    <p class="ps-2 m-0">089650793869</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-dark text-center py-2">
                            <small>This website is designed and built with &#10084; by Information and Technology Division</small>
                          </div>
                        </footer>
                  </section>
            </div>
      </body>

</html>

