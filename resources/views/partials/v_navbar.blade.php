<nav class="navbar navbar-expand-lg sticky-top w-100 p-3 mh-100 d-inline-block shadow p-3  bg-body rounded">
  <div class="container-fluid">
    <a class="navbar-brand text-bold" href="#"><img src="asset/img/logo.png" style="width:45px;"> Bimbingan Konseling & karir</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-blue"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link me-sm-4 nav-link {{ request()->is('index') ? 'active' : ''}}" href="/index">Home</a>
        <a class="nav-link me-sm-4 nav-link {{ request()->is('profile') ? 'active' : ''}}" href="/profile">Profile</a>
        <a class="nav-link me-sm-4 nav-link {{ request()->is('peranan') ? 'active' : ''}}" href="/peranan">Peranan BK</a>
        <a class="nav-link me-sm-4 nav-link {{ request()->is('layanan') ? 'active' : ''}}"href="/layanan">Layanan BK</a>
        <a class="nav-link me-sm-4 nav-link {{ request()->is('contact') ? 'active' : ''}}"href="/contact" tabindex="-1" aria-disabled="true">Contact</a>
      </div>
    </div>
  </div>
</nav>