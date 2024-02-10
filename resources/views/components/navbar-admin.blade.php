<style>
    .shadow-sm-red{
        box-shadow: 0 .125rem .25rem rgba(255,84,136,0.275);
    }
</style>
<nav id="NavbarAdmin" class="navbar navbar-expand-md bg-white shadow-sm-red fixed-top py-0">
      <div class="container-fluid px-5 py-0">
          <a class="navbar-brand" href="{{ route('dashboard.index') }}">
              <img src="/storage/logo/SE_ALS_2023.svg" alt="Social Event" width="200">
          </a>
  
          <div class="dropdown">
              <a class="text-decoration-none btn-dropdown text-dark" role="button" data-bs-toggle="dropdown">
                  <span class="fa-stack fa-sm">
                        <i class="fa-regular fa-circle fa-stack-2x text-pink"></i>
                      <i class="fa-solid fa-user fa-stack-1x text-pink"></i>
                  </span>
                  <span class="fw-medium">
                      {{ auth()->user()->name }}
                  </span>
              </a>
  
              <ul class="dropdown-menu dropdown-menu-end p-1 border-0 shadow-sm rounded-3" style="font-size: 14px">
                  <li>
                      <a class="dropdown-item p-2 rounded-3" href="{{ route('home') }}">{{ __('Home') }}</a>
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
          </div>
  
      </div>
</nav>