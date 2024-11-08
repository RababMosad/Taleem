<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="#">@lang('messages.Taleem')</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
              @yield('navbar-links')
              <li class="nav-item">
                  <a href="{{ route('blog.index') }}" class="btn btn-success {{ request()->routeIs('blog.index') ? 'active' : '' }}"> 
                      <i class="nav-icon fas fa-book"></i> 
                      المدونة
                  </a>
              </li>
          </ul>
          <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @lang('messages.language')
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="{{ route('locale.switch', 'ar') }}">ِ@lang('messages.Arabic')</a></li>
                      <li><a class="dropdown-item" href="{{ route('locale.switch', 'en') }}">@lang('messages.English')</a></li>
                  </ul>
              </li>
          </ul>

          @if (Route::has('login'))
              <nav class="-mx-3 flex flex-1 justify-end">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                          Dashboard
                      </a>
                  @else
                      <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                          Log in
                      </a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                              Register
                          </a>
                      @endif
                  @endauth
              </nav>
          @endif
      </div>
  </div>
</nav>