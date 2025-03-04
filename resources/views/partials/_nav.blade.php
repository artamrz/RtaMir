<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{ asset('img/Rtamir-logo-tps0-200px.png') }}" alt="RtaMirLogo" width="107" height="70"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? "active" : "" }} " aria-current="page" href="/">Home</a>
          </li>
           <!--<li class="nav-item dropdown ms-auto ">
                <a class="nav-link dropdown-toggle {{ Request::is('posts') ? "active" : "" }}" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Posts</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                  <li><a class="dropdown-item" href="/posts/create">Create</a></li>
                  <li><a class="dropdown-item" href="/posts">Archive</a></li>
                </ul>
            </li> -->
          <li class="nav-item">
            <a class="nav-link {{ Request::is('services') ? "active" : "" }}" href="/about">Services </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('rlog') ? "active" : "" }}" href="/rlog">Rlog </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="/about">About RtaMir </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="/contact">Get In-touch</a>
          </li>
        </ul>
        <ul class="nav navbar-nav">
            <li class="nav-item dropdown ms-auto">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown04">
                  <li><a class="dropdown-item" href="/posts"></a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                </ul>
            </li>
        </ul>     
      </div>
    </div>
  </nav>