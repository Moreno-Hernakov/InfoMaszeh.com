<header class="d-flex justify-content-between container py-3">
  <a href="/">
      <h3 class="fw-bold text-dark">InfoMaszeh.<span class="text-warning">com</span> </h3>
  </a>
  @guest
    <a href="/login" class="btn  btn-warning text-light">MASUK</a>
  @endguest
  @auth
    <a class="btn btn-warning" onclick="return confirm('yakin ingin ingin Logout?')" href="/logout">Logout</a>
  @endauth
</header>