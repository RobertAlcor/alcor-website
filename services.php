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
  <title>Webdesign und SEO Wien | Professionelle Weblösungen | Alcor</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://www.webdesign-alcor.at/services.php">

  <meta name="description" content="Professionelles Webdesign und SEO in Wien. Maßgeschneiderte Lösungen zum Pauschalpreis. Jetzt Kontakt aufnehmen und mehr erfahren.">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Webdesign Wien, SEO Wien, Webdesign Agentur Wien, Webentwicklung, Responsive Webdesign, E-Commerce Webdesign, SEO Beratung, Webdesign Niederösterreich, Webdesign Burgenland">
  <meta name="author" content="WebDesign Alcor">
  <meta name="page-topic" content="Business">
  <meta name="page-type" content="Webdesign Services">
  <meta name="audience" content="All">
  <meta name="distribution" content="Global">
  <meta name="language" content="de">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook Meta-Tags -->
  <meta property="og:title" content="Professionelles Webdesign und SEO in Wien | WebDesign Alcor">
  <meta property="og:description" content="Alcor bietet Webdesign und SEO in Wien. Maßgeschneiderte Lösungen, die überzeugen. Jetzt anfragen.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.webdesign-alcor.at/services.php">
  <meta property="og:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta property="og:site_name" content="WebDesign Alcor">
  <meta property="og:locale" content="de_AT">

  <!-- Twitter Card Daten -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="WebDesign Alcor bietet maßgeschneidertes Webdesign und SEO in Wien. Kontaktieren Sie uns für mehr Informationen.">
  <meta name="twitter:title" content="WebDesign Alcor - Professionelles Webdesign und SEO in Wien">
  <meta name="twitter:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta name="twitter:site" content="@webdesign_alcor">
  <meta name="twitter:creator" content="@webdesign_alcor">

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

</head>

<body>

  <!-- Navigation -->
  <?php include 'includes/navigation.php'; ?>
  <?php include 'includes/social-sharing.php'; ?>


  <header id="service-header" aria-label="Service Header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h1 class="display-5">Top Webdesign Services in Wien</h1>
          <h2>Ihre Webdesign Agentur mit Profi-Webdesignern</h2>
          <p>Individuelles <strong>Webdesign in Wien</strong>, Logodesign, Visitenkarten und umfassende Suchmaschinenoptimierung (SEO) für Ihren Erfolg.</p>
          <div class="hero-buttons mt-5">
            <a href="/index.php" class="btn btn-primary mb-3 me-md-4 mb-md-0" aria-label="Mehr über unsere Services erfahren">
              <i class="bi bi-rocket-takeoff"></i> Startseite
            </a>
            <a href="/kontakt.php" class="btn btn-outline" aria-label="Kontaktieren Sie uns">
              <i class="bi bi-envelope-at me-1"></i> Kontakt
            </a>
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




  <section class="sec-small pb-0 d-none">
    <div class="container">
      <!-- Breadcrumb Navigation -->
      <?php
      include('includes/breadcrumbs.php');
      getBreadcrumbs('/services.php');
      ?>
    </div>
  </section>


  <main>
    <section id="servicecards">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="servicecard shadow p-5 rounded text-center text-lg-start">
              <i class="bi bi-search fs-2 text-primary mb-3"></i>
              <div class="servicehead">
                <h2 class="fw-bold h4">SEO Wien</h2>
                <hr>
              </div>
              <div class="servicecontent">
                <p>
                  Unsere SEO-Experten optimieren Ihre Website, um sie auf die erste Seite von Google zu bringen. Damit erhöhen wir die Sichtbarkeit und sie erhalten mehr Besucher mit unserem SEO-Service.
                </p>
              </div>
              <div class="servicebutton mt-4">
                <a href="/kontakt.php" aria-label="Kontaktieren Sie uns" class="fw-bold text-primary">Kontakt <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="servicecard shadow p-5 rounded text-center text-lg-start">
              <i class="bi bi-brush fs-2 text-primary mb-3"></i>
              <div class="servicehead">
                <h2 class="fw-bold h4">Webdesign Wien</h2>
                <hr>
              </div>
              <div class="servicecontent">
                <p>
                  Unsere Webdesigner in Wien kreieren Homepages, die Ihr Unternehmen perfekt repräsentieren. Wir sorgen dafür, dass Ihr Webdesign technisch einwandfrei und visuell ansprechend ist.
                </p>
              </div>
              <div class="servicebutton mt-4">
                <a href="/kontakt.php" aria-label="Kontaktieren Sie uns" class="fw-bold text-primary">Kontakt <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="servicecard shadow p-5 rounded text-center text-lg-start">
              <i class="bi bi-laptop fs-2 text-primary mb-3"></i>
              <div class="servicehead">
                <h2 class="fw-bold h4">Webdesign Technik</h2>
                <hr>
              </div>
              <div class="servicecontent">
                <p>
                  Wir erstellen technisch einwandfreie Homepages, die Ihren Anforderungen entsprechen. Unsere Webdesigner in Wien sorgen dafür, dass Ihre Website stets auf dem neuesten Stand ist.
                </p>
              </div>
              <div class="servicebutton mt-4">
                <a href="/kontakt.php" aria-label="Kontaktieren Sie uns" class="fw-bold text-primary">Kontakt <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="webdesign-wien" class="pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="fw-bold">Professionelles <strong>Webdesign in Wien</strong></h2>
            <p>Unsere <strong>Webdesign-Agentur in Wien</strong> erstellt Homepages, die Ihr Unternehmen optimal präsentieren und Ihre Zielgruppe begeistern. Unsere erfahrenen <strong>Webdesigner</strong> legen großen Wert auf Ästhetik und Funktionalität, um Ihr Unternehmen bestmöglich darzustellen.</p>
            <p class="fw-bold fs-4 text-accent">Warum wir die richtige Wahl sind:</p>
            <ul>
              <li><b>Individuelle Gestaltung:</b> Einzigartige Designs, die Ihre Corporate Identity widerspiegeln.</li>
              <li><b>Benutzerfreundlichkeit:</b> Intuitive Navigation und ansprechendes Design für ein optimales Nutzererlebnis.</li>
              <li><b>Mobile Optimierung:</b> Webseiten, die für alle Endgeräte optimiert sind.</li>
              <li><b>Keine laufenden Kosten:</b> Keine monatlichen Kosten im Gegensatz zu WordPress.</li>
            </ul>
          </div>
          <div class="col-lg-6 text-center text-lg-start imgbgquad">
            <img src="/assets/img/webdesign-services-wien.webp" alt="Webdesign Wien" class="img-fluid rounded shadow mb-5">
          </div>
        </div>
      </div>
    </section>

    <section id="seo-wien" class="bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-1 order-lg-2">
            <h2 class="fw-bold">Effektives <strong>SEO in Wien</strong></h2>
            <p>Unsere <strong>SEO-Services in Wien</strong> bringen Ihre Webseite auf die vorderen Plätze der Suchergebnisse bei Google. Unsere SEO-Experten analysieren Ihre Seite und optimieren sie für mehr Sichtbarkeit und höhere Besucherzahlen.</p>
            <p class="text-accent fw-bold fs-5">Unsere SEO-Dienstleistungen umfassen:</p>
            <ul>
              <li><b>Keyword-Recherche:</b> Identifikation relevanter Suchbegriffe für Ihr Geschäft.</li>
              <li><b>On-Page-Optimierung:</b> Verbesserung der Seitenelemente für bessere Rankings.</li>
              <li><b>Linkbuilding:</b> Aufbau hochwertiger Backlinks für mehr Autorität und Vertrauen.</li>
            </ul>
          </div>
          <div class="col-lg-6 text-center imgbgquad order-lg-1 order-2">
            <img src="/assets/img/webdesign-seo-wien.webp" alt="SEO Wien" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>


    <section id="logo-visitenkarten">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h2 class="fw-bold"><b>Logodesign und Visitenkarten</b> in Wien</h2>
            <p class="lead">Ein starkes Logo und professionelle Visitenkarten sind essenziell für den ersten Eindruck Ihres Unternehmens. Unser <strong>Webdesign in Wien</strong> kreiert für Sie ein unverwechselbares Corporate Design, das Ihre Marke einzigartig macht.</p>
            <p class="text-accent fw-bold fs-5">Unsere Design-Dienstleistungen umfassen:</p>
            <ul>
              <li><b>Logodesign:</b> Entwicklung eines einprägsamen Logos, das Ihre Markenidentität stärkt.</li>
              <li><b>Visitenkarten:</b> Professionelles Design und hochwertiger Druck für Ihre Geschäftskarten.</li>
              <li><b>Corporate Identity:</b> Ganzheitliche Gestaltung aller Geschäftsmaterialien für ein konsistentes Erscheinungsbild.</li>
            </ul>
          </div>
          <div class="col-lg-6 text-center imgbgquad">
            <img src="/assets/img/webdesign-logo-wien-alcor.webp" alt="Logodesign und Visitenkarten" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/banner.php'; ?>

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

    <!-- Case Study Section -->
    <section id="case-study-section" class="bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-8">
            <h2>Handcodierte Projekte</h2>
            <h3><strong>Webdesign-Projekte</strong> für unsere Kunden in Wien und anderen Bundesländern</h3>
          </div>
        </div>

        <!-- Projekt 1: Massagewelt Wien -->
        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <img src="/assets/projects/massagewelt.webp" class="img-fluid rounded" alt="Webdesign Projekt Massagewelt Wien" width="600" height="400">
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <h3 class="fw-bold text-dark">Massagewelt Wien</h3>
            <p><a href="https://massagewelt.wien" class="text-decoration-underline" target="_blank">massagewelt.wien</a> bietet Wellness- und Massageangebote in Wien. Sie benötigten eine neue Webseite, um ihre Dienstleistungen besser zu präsentieren und ihre Online-Sichtbarkeit zu erhöhen.</p>
            <h4>Unsere Lösung</h4>
            <ul>
              <li><i class="bi bi-search"></i> SEO-optimierte Texte</li>
              <li><i class="bi bi-key"></i> Umfassende Keyword-Recherche</li>
              <li><i class="bi bi-brush"></i> Entwicklung eines individuellen Logos</li>
              <li><i class="bi bi-globe"></i> Bereitstellung von Domain und Hosting</li>
              <li><i class="bi bi-layout-text-window-reverse"></i> Modernes <strong>Webdesign</strong></li>
            </ul>
            <h4>Ergebnisse</h4>
            <p>Dank unserer Maßnahmen verzeichnete <a href="https://massagewelt.wien" class="text-decoration-underline" target="_blank">massagewelt.wien</a> einen deutlichen Anstieg der Besucherzahlen und eine verbesserte Kundenbindung.</p>
            <a href="/kontakt.php" class="btn btn-primary" aria-label="Kontaktieren Sie uns"><i class="bi bi-envelope-at me-1"></i> KONTAKT</a>
          </div>
        </div>
        <hr>

        <!-- Projekt 2: Eco Energieausweis -->
        <div class="row my-5 align-items-center">
          <div class="col-md-6">
            <img src="/assets/projects/project4.webp" class="img-fluid rounded" alt="Webdesign Projekt Eco Energieausweis Wien" width="600" height="400">
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <h3 class="fw-bold text-dark">Eco Energieausweis Wien</h3>
            <p><a href="https://eco-energieausweis.at" class="text-decoration-underline" target="_blank">eco-energieausweis.at</a> ist ein führender Anbieter von Energieausweisen in Wien. Sie wollten ihre alte Webseite modernisieren und ihre Online-Sichtbarkeit verbessern.</p>
            <h4>Unsere Lösung</h4>
            <ul>
              <li><i class="bi bi-layout-text-window-reverse"></i> Modernes <strong>Webdesign</strong></li>
              <li><i class="bi bi-phone"></i> Responsive Entwicklung</li>
              <li><i class="bi bi-search"></i> Suchmaschinenoptimierung (SEO)</li>
              <li><i class="bi bi-ui-checks"></i> Benutzerfreundliches Kontaktformular</li>
              <li><i class="bi bi-globe"></i> Bereitstellung von Domain und Hosting</li>
            </ul>
            <h4>Ergebnisse</h4>
            <p>Nach dem Relaunch verzeichnete <a href="https://eco-energieausweis.at" class="text-decoration-underline" target="_blank">eco-energieausweis.at</a> einen Anstieg des Website-Traffics um 40% und eine Verbesserung der Conversion-Rate um 25%.</p>
            <a href="/kontakt.php" class="btn btn-primary" aria-label="Kontaktieren Sie uns"><i class="bi bi-envelope-at me-1"></i> KONTAKT</a>
          </div>
        </div>
      </div>

    </section>

  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- JavaScript-Dateien -->
  <!-- External JS Links -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <!-- Custom JS -->
  <script src="/assets/js/app.min.js" defer></script>

</body>

</html>
