<style>
      .shadow-sm-red{
            box-shadow: 0 .125rem .25rem rgba(255,84,136,0.275);
      }
      .nav-link{
            width:300px;
      }
      .not-active{
            color: #5a5a5a;
      }
      .active{
            display: block;
            color: rgba(255,84,136,1);
            font-weight: 700;
      }
  </style>
<nav id="SideBarAdmin" class="d-none d-sm-block sidebar shadow-sm-red shadow-danger pt-5 overflow-auto overflow-x-hidden" style="height: 100vh;">
      <div class="sidebar-content">
            <ul class="nav flex-column">
                  <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}"
                        class="nav-link pt-4 active fs-4" style="color: rgba(255,84,136,1);">
                        Dashboard
                        </a>
                  </li>
                  @if (auth()->user()->role == 'ADMIN')
                        <li class="nav-item mt-2">
                              <a href="{{ route('supports.index') }}"
                                    class="nav-link {{ Request::is('supports') ? 'active' : 'not-active' }}">
                                    <i class="fa-solid fa-handshake col-1"></i> Supports
                              </a>
                        </li>
                        <li class="nav-item">
                              <a href="{{ route('messages.index') }}"
                                    class="nav-link {{ Request::is('messages') ? 'active' : 'not-active' }}">
                                    <i class="fa-solid fa-message col-1"></i> Message
                              </a>
                        </li>
                        <li class="nav-item mb-4">
                              <a href="{{ route('environments.index') }}"
                                    class="nav-link {{ Request::is('environments') ? 'active' : 'not-active' }}">
                                    <i class="fa-solid fa-gears col-1"></i> Environments
                              </a>
                        </li>
                  @endif
                  <hr class="m-0">
                  <li class="nav-item col-12">
                        <a class="nav-link fw-bold text-white bg-danger {{ Request::is('logout') ? 'active' : 'not-active' }}" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i> {{ __('Logout') }}
                        </a>
            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                  </li>
            </ul>
      </div>
</nav>