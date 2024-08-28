<?php
include dirname(__FILE__) . '/includes/blog-preview.php';
$latest_posts = getLatestBlogPosts(4);
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <?php include 'includes/cookie-banner.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Über uns | Webdesign und SEO in Wien und Umgebung | Alcor</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://www.webdesign-alcor.at/about.php">

  <meta name="description" content="Alcor bietet maßgeschneidertes Webdesign und SEO in Wien und Umgebung. Vertrauen Sie auf unsere Expertise für Ihre erfolgreiche Online-Präsenz.">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Webdesign Wien, Webdesigner Wien, Webdesign Agentur Wien, Webentwicklung Wien, SEO Wien, Responsive Webdesign Wien, E-Commerce Webdesign, SEO Beratung Wien, Webdesign Niederösterreich, Webdesign Burgenland, Webdesign Steiermark, Webdesign Salzburg, Webdesign Kärnten, Webdesign Oberösterreich, Webdesign Tirol, Webdesign Vorarlberg">
  <meta name="author" content="WebDesign Alcor">
  <meta name="page-topic" content="Business">
  <meta name="page-type" content="Webdesign Services">
  <meta name="audience" content="All">
  <meta name="distribution" content="Global">
  <meta name="language" content="de">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook Meta-Tags -->
  <meta property="og:title" content="Über uns - WebDesign Alcor - Professionelles Webdesign und SEO in Wien und Umgebung">
  <meta property="og:description" content="Alcor bietet professionelles Webdesign und SEO in Wien. Kontaktieren Sie uns jetzt für maßgeschneiderte Webseiten und effektive Suchmaschinenoptimierung.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.webdesign-alcor.at/about.php">
  <meta property="og:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta property="og:site_name" content="WebDesign Alcor">
  <meta property="og:locale" content="de_AT">

  <!-- Twitter Card Daten -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Alcor bietet professionelles Webdesign und SEO in Wien. Kontaktieren Sie uns jetzt für maßgeschneiderte Webseiten und effektive Suchmaschinenoptimierung.">
  <meta name="twitter:title" content="Über uns - WebDesign Alcor - Professionelles Webdesign und SEO in Wien und Umgebung">
  <meta name="twitter:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta name="twitter:site" content="@deinTwitterName">
  <meta name="twitter:creator" content="@deinTwitterName">

  <!-- Kontaktinformationen und geografische Tags -->
  <meta property="business:contact_data:street_address" content="Johann-Teufel-Gasse 39-47/11/2">
  <meta property="business:contact_data:locality" content="Wien">
  <meta property="business:contact_data:region" content="Wien">
  <meta property="business:contact_data:postal_code" content="1230">
  <meta property="business:contact_data:country_name" content="Österreich">
  <meta property="business:contact_data:email" content="office@webdesign-alcor.at">
  <meta property="business:contact_data:phone_number" content="+4366499124999">
  <meta property="business:contact_data:website" content="https://www.webdesign-alcor.at/">

  <!-- Präferenzen für Farbschema und Theme -->
  <meta name="color-scheme" content="light dark">
  <meta name="theme-color" content="#ffffff">

  <!-- Favicon und Touch Icons -->
  <link rel="icon" href="/assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/assets/favicon/android-chrome-512x512.png">

  <!-- Externe CSS und JS Ressourcen -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/styles.min.css">

  <!-- Google tag (gtag.js) - Async Loading -->
  <script id="gtag-init" type="text/plain"></script>
  <script id="gtag-config" type="text/plain"></script>

  <!-- Structured Data (JSON-LD) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "WebDesign-Alcor",
      "url": "https://www.webdesign-alcor.at/about.php",
      "logo": "https://www.webdesign-alcor.at/assets/logo/alcor.jpg",
      "image": [
        "https://www.webdesign-alcor.at/assets/img/ogwebdesign.jpg",
        "https://www.webdesign-alcor.at/assets/logo/webdesign-wien.jpg"
      ],
      "description": "WebDesign Alcor in Wien: Webdesign, SEO, Logo- und Visitenkartendesign. Professionelle und maßgeschneiderte Lösungen für Ihr Unternehmen.",
      "telephone": "+4366499124999",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Johann-Teufel-Gasse 39-47/11",
        "addressLocality": "Wien",
        "postalCode": "1230",
        "addressCountry": "AT"
      },
      "sameAs": [
        "https://www.facebook.com/webagenturalcor",
        "https://www.instagram.com/webdesign_alcor/"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+4366499124999",
        "contactType": "customer service",
        "areaServed": ["Wien", "Niederösterreich", "Burgenland", "Steiermark", "Salzburg", "Kärnten", "Oberösterreich", "Tirol", "Vorarlberg"],
        "availableLanguage": ["German", "English", "Polish"]
      },
      "founder": {
        "@type": "Person",
        "name": "Robert Alchimowicz"
      },
      "foundingDate": "2020-01-01",
      "areaServed": "Wien",
      "award": "Best Web Design Agency in Wien 2023",
      "slogan": "Ihr Erfolg ist unser Ziel"
    }
  </script>

</head>

<body>
  <?php include 'includes/navigation.php'; ?>
  <?php include 'includes/social-sharing.php'; ?>

  <!-- Hero Section -->
  <header id="about-header" aria-label="Über uns Header">
    <div class="about-header-content">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-12 text-center">
            <h1 class="display-5"><strong>Über WebDesign Alcor</strong></h1>
            <p class="lead"><strong>Ihr Partner für <a href="/index.php">Webdesign</a> und <a href="/posts/local-seo-optimierung.php">SEO</a> in Wien und ganz Österreich</strong></p>
          </div>
        </div>
      </div>
    </div>
  </header>


  <section id="marquee" class="p-0">
    <div class="marquee-container text-uppercase shadow">
      <div class="marquee-content" aria-label="Marquee">
        <span class="p me-3 fs-6 fs-md-5">WebDesign</span>
        <span class="p me-3 fs-6 fs-md-5">WebDevelopment</span>
        <span class="p me-3 fs-6 fs-md-5">Bildbearbeitung</span>
        <span class="p me-3 fs-6 fs-md-5">Fotografie</span>
        <span class="p me-3 fs-6 fs-md-5">Künstliche Intelligenz</span>
        <span class="p me-3 fs-6 fs-md-5">Python</span>
        <span class="p me-3 fs-6 fs-md-5">SEO</span>
        <span class="p me-3 fs-6 fs-md-5">Responsive Design</span>
        <span class="p me-3 fs-6 fs-md-5">Branding</span>
        <span class="p me-3 fs-6 fs-md-5">Visitenkarten</span>
        <span class="p me-3 fs-6 fs-md-5">Briefpapier</span>
        <span class="p me-3 fs-6 fs-md-5">Logo Erstellung</span>
      </div>
    </div>
  </section>

  <section class="sec-small d-none">
    <div class="container">
      <!-- Breadcrumb Navigation -->
      <?php
      include('includes/breadcrumbs.php');
      getBreadcrumbs('about.php');
      ?>
    </div>
  </section>

  <main>
    <section id="team" aria-label="Unser Team">
      <div class="container">
        <div class="row align-items-center justify-content-center my-5">
          <div class="col-md-8 text-center">
            <h2 class="fw-bold mb-4 text-accent"><strong>Unser engagiertes Team</strong></h2>
            <p class="mb-3">
              Unser Team besteht aus erfahrenen Webdesignern und Entwicklern in Wien. Unsere Mitarbeiter arbeiten mit Leidenschaft und Engagement, um höchste Kundenzufriedenheit zu gewährleisten. Bei uns steht der Kunde stets im Mittelpunkt.
            </p>
          </div>
        </div>

        <div class="row mt-5">
          <!-- Teammitglied 1 -->
          <div class="col-md-3">
            <div class="team-member text-center">
              <img src="/assets/img/member4.webp" alt="Monika Alchimowicz - Grafik & Webdesignerin" class="img-fluid lazy" width="400" height="400" data-src="/assets/img/member4.webp">
              <div class="info mt-3">
                <h4>Monika Alchimowicz</h4>
                <p class="fw-bold">Grafik & Webdesignerin</p>
                <p>Erstellt inspirierende und ansprechende Grafiken mit Leidenschaft.</p>
                <ul class="social-links list-inline">
                  <li class="list-inline-item"><a href="https://www.webdesign-alcor.at" aria-label="Website"><i class="bi bi-web"></i></a></li>
                  <li class="list-inline-item"><a href="tel:+4366499124999" aria-label="Telefon"><i class="bi bi-telephone"></i></a></li>
                  <li class="list-inline-item"><a href="mailto:office@webdesign-alcor.at" aria-label="E-Mail"><i class="bi bi-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Teammitglied 2 -->
          <div class="col-md-3">
            <div class="team-member text-center">
              <img src="/assets/img/member2.webp" alt="Sebastian Schmidt - SEO-Manager" class="img-fluid lazy" width="400" height="400" data-src="/assets/img/member2.webp">
              <div class="info mt-3">
                <h4>Sebastian Schmidt</h4>
                <p class="fw-bold">SEO-Manager</p>
                <p>Experte für SEO mit umfassendem Google-Hintergrund.</p>
                <ul class="social-links list-inline">
                  <li class="list-inline-item"><a href="https://www.webdesign-alcor.at" aria-label="Website"><i class="bi bi-web"></i></a></li>
                  <li class="list-inline-item"><a href="tel:+4366499124999" aria-label="Telefon"><i class="bi bi-telephone"></i></a></li>
                  <li class="list-inline-item"><a href="mailto:office@webdesign-alcor.at" aria-label="E-Mail"><i class="bi bi-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Teammitglied 3 -->
          <div class="col-md-3">
            <div class="team-member text-center">
              <img src="/assets/img/member3.webp" alt="Magdalena Novak - Support-Außendienst" class="img-fluid lazy" width="400" height="400" data-src="/assets/img/member3.webp">
              <div class="info mt-3">
                <h4>Magdalena Novak</h4>
                <p class="fw-bold">Support-Außendienst</p>
                <p>Spezialisiert auf Webdesign-Anfragen und Kundenwünsche.</p>
                <ul class="social-links list-inline">
                  <li class="list-inline-item"><a href="https://www.webdesign-alcor.at" aria-label="Website"><i class="bi bi-web"></i></a></li>
                  <li class="list-inline-item"><a href="tel:+4366499124999" aria-label="Telefon"><i class="bi bi-telephone"></i></a></li>
                  <li class="list-inline-item"><a href="mailto:office@webdesign-alcor.at" aria-label="E-Mail"><i class="bi bi-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Teammitglied 4 -->
          <div class="col-md-3">
            <div class="team-member text-center">
              <img src="/assets/img/member1.webp" alt="Robert Alchimowicz - Inhaber & Webdesigner" class="img-fluid lazy" width="400" height="400" data-src="/assets/img/member1.webp">
              <div class="info mt-3">
                <h4>Robert Alchimowicz</h4>
                <p class="fw-bold">Inhaber & Webdesigner</p>
                <p>Führt das Team mit einer klaren Vision für Weblösungen und Design.</p>
                <ul class="social-links list-inline">
                  <li class="list-inline-item"><a href="https://www.webdesign-alcor.at" aria-label="Website"><i class="bi bi-web"></i></a></li>
                  <li class="list-inline-item"><a href="tel:+4366499124999" aria-label="Telefon"><i class="bi bi-telephone"></i></a></li>
                  <li class="list-inline-item"><a href="mailto:office@webdesign-alcor.at" aria-label="E-Mail"><i class="bi bi-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-center mt-5">
          <div class="col-lg-9 text-center">
            <p class="mb-3">
              Mit <strong>über 20 Jahren Erfahrung</strong> und mehr als <strong>500 erfolgreichen Projekten</strong> sind wir Ihr vertrauensvoller Partner für <a href="/services.php" class="text-decoration-underline">professionelles Webdesign</a> in Wien.
              Unser Team besteht aus Spezialisten in den Bereichen <a href="/posts/technisch-perfekte-webseiten-vscode.php" class="text-decoration-underline">Webentwicklung</a>, Grafikdesign und <strong>SEO</strong>. Jeder bringt seine individuellen Stärken ein, um Projekte erfolgreich umzusetzen und Ihre Anforderungen zu erfüllen.
            </p>
            <p class="mb-0 lead">
              Lernen Sie uns kennen und erfahren Sie, wie wir gemeinsam Ihre Vision verwirklichen können. <br>Kontaktieren Sie uns für eine <a href="/kontakt.php" class="text-decoration-underline">unverbindliche Beratung</a>.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="values" class="bg-light" aria-label="Unsere Werte">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="fw-bold">Unsere Werte</h2>
            <p>
              Unsere Werte bilden die Grundlage unserer Arbeit und sind entscheidend für den Aufbau langfristiger Beziehungen zu unseren Kunden. Wir setzen sie in jedem Projekt um und sind stolz darauf, dass sie uns auszeichnen.
            </p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="value-card h-100 p-4 text-center">
              <div class="icon mb-3">
                <i class="bi bi-emoji-smile icon-m"></i>
              </div>
              <h3 class="fw-bold h5">Kundenzufriedenheit</h3>
              <p>Ihre Zufriedenheit steht bei uns an erster Stelle. Wir bieten Lösungen, die Ihre Erwartungen übertreffen. Unsere <a href="/services.php" class="text-decoration-underline">Webdesign Services</a> sind darauf ausgerichtet, Ihnen den größtmöglichen Nutzen zu bieten.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="value-card h-100 p-4 text-center">
              <div class="icon mb-3">
                <i class="bi bi-award icon-m"></i>
              </div>
              <h3 class="fw-bold h5">Qualität</h3>
              <p>Wir setzen in jeder Phase höchste Qualitätsstandards. Unsere Projekte sind darauf ausgelegt, langlebige und hochwertige <a href="/services.php" class="text-decoration-underline">Webseiten</a> zu erstellen.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="value-card h-100 p-4 text-center">
              <div class="icon mb-3">
                <i class="bi bi-lightbulb icon-m"></i>
              </div>
              <h3 class="fw-bold h5">Innovation</h3>
              <p>Kreativität und technische Innovation sind der Schlüssel zu unserem Erfolg. Erfahren Sie mehr über unsere innovativen <a href="/services.php" class="text-decoration-underline">Webentwicklungsprojekte</a>.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="value-card h-100 p-4 text-center">
              <div class="icon mb-3">
                <i class="bi bi-shield-check icon-m"></i>
              </div>
              <h3 class="fw-bold h5">Integrität</h3>
              <p>Transparenz und Ethik sind die Grundlagen für Vertrauen. Unsere Unternehmenswerte spiegeln diese Prinzipien wider.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="value-card h-100 p-4 text-center">
              <div class="icon mb-3">
                <i class="bi bi-person-circle icon-m"></i>
              </div>
              <h3 class="fw-bold h5">Individualität</h3>
              <p>Jedes Projekt ist einzigartig und verdient maßgeschneiderte Lösungen. Unsere <a href="/services.php" class="text-decoration-underline">Webdesign-Lösungen</a> sind genau auf Ihre Bedürfnisse zugeschnitten.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="value-card h-100 p-4 text-center">
              <div class="icon mb-3">
                <i class="bi bi-globe icon-m"></i>
              </div>
              <h3 class="fw-bold h5">Verantwortung</h3>
              <p>Wir stehen hinter unserer Arbeit und setzen uns für transparente Praktiken ein. Lesen Sie mehr über unsere Verantwortungsinitiativen.</p>
            </div>
          </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <a href="/kontakt.php" class="btn btn-primary btn-lg contact-btn" aria-label="Kontaktieren Sie uns" style="width: 300px;"><i class="bi bi-envelope-fill me-2"></i>Kontaktieren Sie uns</a>
          </div>
        </div>
      </div>
    </section>

    <section class="latest-blogs">
      <div class="container">
        <h2 class="text-center mb-4">Neueste Blogbeiträge</h2>
        <div class="row">
          <?php foreach ($latest_posts as $post): ?>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card h-100 rounded-3 border-0 shadow-sm nru">
                <img src="<?php echo htmlspecialchars($post['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($post['title']); ?>">
                <div class="card-body">
                  <a href="<?php echo '/posts/' . basename($post['file']); ?>">
                    <h4 class="card-title fs-6"><?php echo htmlspecialchars($post['title']); ?></h4>
                  </a>
                  <p class="small text-secondary"><?php echo htmlspecialchars($post['date']); ?></p>
                </div>
                <div class="card-footer bg-white border-0">
                  <a href="<?php echo '/posts/' . basename($post['file']); ?>" class="text-primary fw-bold">Weiterlesen <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- JavaScript-Dateien -->
  <!-- External JS Links -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Custom JS -->
  <script src="/assets/js/app.min.js" defer></script>

</body>

</html>
