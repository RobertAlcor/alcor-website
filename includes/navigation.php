<!-- Small Header -->
<div class="container border-2 border-bottom" id="smallheader">
  <div class="row d-flex justify-content-between align-items-center py-2">
    <div class="col-lg-6 text-center text-md-start">
      <p class="m-0 fw-bold fs-6">
        Echtes Webdesign in Wien Liesing | +20 Jahre Erfahrung
      </p>
    </div>
    <div class="col-lg-6 text-center text-md-end">
      <span class="me-3 fs-6">
        <a href="tel:+4366499124999"><i class="bi bi-telephone-fill text-accent me-1"></i> +4366499124999</a>
      </span>
      <span id="opening-hours" class="badge bg-success"></span>
    </div>
  </div>
</div>


<!-- Navigation -->
<!-- <nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="https://www.webdesign-alcor.at">
      <img src="/assets/logo/alcorlogoweiss.svg" alt="Webdesign Alcor Logo" class="img-fluid" id="header-logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-5 py-lg-0" id="navbarNav">
      <ul class="navbar-nav mx-auto text-center text-uppercase fw-bold">
        <li class="nav-item"><a class="nav-link" href="https://www.webdesign-alcor.at">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about.php">Über Uns</a></li>
        <li class="nav-item"><a class="nav-link" href="/services.php">Leistungen</a></li>
        <li class="nav-item"><a class="nav-link" href="/webdesign-preise.php">Preise</a></li>
        <li class="nav-item"><a class="nav-link" href="/blog.php">BLOG</a></li>
        <li class="nav-item"><a class="nav-link" href="/kontakt.php">Kontakt</a></li>
        <li class="nav-item"><a class="nav-link" href="/faq.php">FAQ</a></li>
      </ul>
      <div class="mt-3 mt-lg-0 text-center">
        <button class="btn btn-warning shadow">
          <a href="/kontakt.php" class="text-dark fs-6"><i class="bi bi-arrow-right-circle"></i> ANGEBOT EINHOLEN</a>
        </button>
      </div>
    </div>
  </div>
</nav> -->


<nav class="navbar navbar-expand-lg sticky-top bg-light text-dark shadow">
  <div class="container">
    <a class="navbar-brand" href="https://www.webdesign-alcor.at">
      <img src="/assets/logo/alcorlogoweiss.svg" alt="Webdesign Alcor Logo" class="img-fluid" id="header-logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-3 mt-5 mt-lg-0" id="navbarNav">
      <ul class="navbar-nav mx-auto text-center text-uppercase fw-bold">
        <li class="nav-item px-3">
          <a class="nav-link" href="https://www.webdesign-alcor.at">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/about.php">Über Uns</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/services.php">Leistungen</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/webdesign-preise.php">Preise</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/blog.php">Blog</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/faq.php">FAQ</a>
        </li>
      </ul>
      <div class="mt-3 mt-lg-0 text-center">
        <a href="/kontakt.php" class="btn btn-warning btn-rounded text-dark shadow-lg">
          <i class="bi bi-arrow-right-circle text-white"></i> Angebot Einholen
        </a>
      </div>
      <div class="d-block d-md-none mt-3 mt-lg-0">
        <div class="mt-3 mt-lg-0 text-center">
          <a href="tel:+4366499124999" class="btn btn-outline-secondary btn-rounded text-dark shadow-lg">
            <i class="bi bi-telephone-fill text-accent"></i> +4366499124999
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>


<script>
  // Shrink Navbar on Scroll
  window.onscroll = function() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.querySelector('.navbar').classList.add('shrink');
    } else {
      document.querySelector('.navbar').classList.remove('shrink');
    }
  };
</script>
