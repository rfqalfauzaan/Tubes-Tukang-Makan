<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="img/logo.png" alt="" width="70" height="70"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "canteen") ? 'active' : '' }}" href="/canteen">Canteen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ ($active === "About") ? 'active' : '' }}" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
               @auth
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf 
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Log Out</button>
                    </form>
                  </li>
                </ul>
              </li>
                @else
              <li class="nav-item">
                <a href="/login" class="nav=link text-light text-decoration-none {{($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              @endauth
            </ul>
    </div>
  </div>
</nav>