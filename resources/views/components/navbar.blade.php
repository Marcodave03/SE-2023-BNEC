
<style>
  .shadow-sm-red{
      box-shadow: 0 .125rem .25rem rgba(255,84,136,0.275);
  }
</style>
<nav id="navbarGuest" class="navbar navbar-expand-md fixed-top py-0 d-none d-lg-block">
    <div class="container-fluid px-5 py-0">
        <a class="navbar-brand" href="{{ route('loading') }}">
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
