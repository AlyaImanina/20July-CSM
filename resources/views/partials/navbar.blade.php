<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: ;">
  <div class="container">
    {{-- <a class="navbar-brand" href="/">CSM</a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
{{--       
      @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
              <a href="{{ url('/home') }}" class="navbar-brand">Home</a>
          @else
              <a href="{{ route('login') }}" class="navbar-brand">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="navbar-brand">Register</a>
              @endif
          @endauth
      </div>
  @endif --}}
  
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dasboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          {{-- <a href="/login" class="nav-link"  {{ ($title === "login") ? 'active' : '' }}><i class="bi bi-box-arrow-in-right"></i>Login</a> --}}
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>