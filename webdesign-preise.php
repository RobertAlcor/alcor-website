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
  <title>Webdesign Preise Wien | Webdesign und SEO in Wien | Alcor</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://www.webdesign-alcor.at/webdesign-preise.php">

  <meta name="description" content="WebDesign Alcor bietet professionelle Webdesign Preise in Wien. Transparente Kosten für Webseiten und effektive SEO-Dienstleistungen. Jetzt uns kontaktieren.">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Webdesign Preise Wien, Webdesigner Wien, Webdesign Kosten Wien, Webdesign Agentur Wien, SEO Wien, Webdesign Alcor, Webentwicklung Wien, Responsive Webdesign Wien, E-Commerce Webdesign Wien, SEO Beratung Wien, Webdesign Niederösterreich, Webdesign Burgenland, Webdesign Steiermark">
  <meta name="author" content="WebDesign Alcor">
  <meta name="page-topic" content="Webdesign Preise Wien">
  <meta name="page-type" content="Webdesign Services">
  <meta name="audience" content="All">
  <meta name="distribution" content="Global">
  <meta name="language" content="de">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook Meta-Tags -->
  <meta property="og:title" content="WebDesign Alcor - Webdesign Preise in Wien für professionelle Webseiten und SEO">
  <meta property="og:description" content="Alcor bietet transparente Webdesign Preise in Wien. Kontaktieren Sie uns für individuelle Webdesign- und SEO-Lösungen.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.webdesign-alcor.at/webdesign-preise.php">
  <meta property="og:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta property="og:site_name" content="WebDesign Alcor">
  <meta property="og:locale" content="de_AT">

  <!-- Twitter Card Daten -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="WebDesign Alcor bietet transparente und faire Webdesign Preise in Wien. Kontaktieren Sie uns für maßgeschneiderte Webdesign- und SEO-Lösungen.">
  <meta name="twitter:title" content="WebDesign Alcor - Webdesign Preise in Wien für professionelle Webseiten und SEO">
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
      "url": "https://www.webdesign-alcor.at/webdesign-preise.php",
      "logo": "https://www.webdesign-alcor.at/assets/logo/alcor.jpg",
      "image": [
        "https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg",
        "https://www.webdesign-alcor.at/assets/logo/webdesign-wien.jpg"
      ],
      "description": "WebDesign Alcor bietet professionelle Webdesign Preise in Wien. Transparente Kosten und maßgeschneiderte Lösungen für Ihr Unternehmen.",
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
  <header id="pricing-header" aria-label="Webdesign Preise Header" class="py-5 bg-dark text-white">
    <div class="pricing-header-content">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 text-center">
            <h1 class="display-4 fw-bold">Webdesign Preise</h1>
            <p class="lead mt-3">Transparente und faire Preise für professionelle Webdesign- und SEO-Dienstleistungen</p>
            <p class="mt-4">
              <a href="/kontakt.php" class="btn btn-lg btn-outline-light" aria-label="Kontakt aufnehmen">Jetzt Kontakt aufnehmen</a>
            </p>
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
      getBreadcrumbs('/webdesign-preise.php');
      ?>
    </div>
  </section>


  <main>

    <section id="pricing-intro">
      <div class="container">
        <div class="row text-center text-lg-start">
          <div class="col-lg-6 mb-4">
            <h3 class="font-weight-bold">Unsere Webdesign-Pakete</h3>
            <p class="lead">Optimale Lösungen für Unternehmen jeder Größe. Lesen Sie mehr über unsere umfassenden <a href="/services.php" class="text-primary">Webdesign- und SEO-Dienstleistungen</a>, die Ihnen helfen, online erfolgreich zu sein.</p>
          </div>
          <div class="col-lg-6 mb-4">
            <p>Falls Sie spezielle Anforderungen haben oder eine individuelle Lösung benötigen, zögern Sie nicht, uns zu kontaktieren. Unser erfahrenes Team von <a href="/about.php" class="text-primary">Webdesign-Experten</a> steht Ihnen jederzeit zur Verfügung, um Ihre Wünsche umzusetzen.</p>
            <p>Besuchen Sie auch unsere <a href="/index.php" class="text-primary">Startseite</a>, um einen Überblick über unser gesamtes Leistungsspektrum zu erhalten.</p>
          </div>
        </div>
      </div>
    </section>



    <section id="preise" class="p-0">
      <div class="container">
        <div class="row g-4 justify-content-center pt-lg-5">

          <!-- Beginner-Paket -->
          <div class="col-md-6 col-lg-4">
            <div class="card package-card shadow-sm border-0">
              <div class="card-header bg-primary text-white">
                <i class="bi bi-star-fill me-2 icon-s-w"></i> Beginner-Paket
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Für kleine Unternehmen</h5>
                <p class="package-price text-success">799€</p>
                <p class="card-text flex-grow-1">
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Webdesign für bis zu 3 Seiten<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Einfärbiges Logo, 2 Änderungen<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Einseitige Visitenkarten (100 Stück)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Domainpaket (jährliche Kosten auf Anfrage)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Einmalige Basis-SEO<br>
                </p>
                <a href="/kontakt.php" class="btn btn-primary btn-block mt-auto" aria-label="Beginner-Paket jetzt anfragen">Jetzt Anfragen</a>
              </div>
            </div>
          </div>

          <!-- Standard-Paket -->
          <div class="col-md-6 col-lg-4">
            <div class="card package-card shadow-lg border-0">
              <div class="card-header bg-primary text-white position-relative">
                <i class="bi bi-balloon-heart-fill me-2 icon-s-w"></i> Standard-Paket
                <span class="badge bg-warning text-dark position-absolute top-100 start-50 translate-middle mt-1">Sehr beliebt</span>
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Für wachsende Unternehmen</h5>
                <p class="package-price text-success">1.599€</p>
                <p class="card-text flex-grow-1">
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Webdesign für bis zu 6 Seiten<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweifärbiges Logo, 3 Änderungen<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweiseitige Visitenkarten (250 Stück)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Domainpaket (jährliche Kosten auf Anfrage)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Einmalige SEO-Optimierung<br>
                </p>
                <a href="/kontakt.php" class="btn btn-primary btn-block mt-auto" aria-label="Standard-Paket jetzt anfragen">Jetzt Anfragen</a>
              </div>
            </div>
          </div>

          <!-- Premium-Paket -->
          <div class="col-md-6 col-lg-4">
            <div class="card package-card shadow-sm border-0">
              <div class="card-header bg-primary text-white">
                <i class="bi bi-award-fill me-2 icon-s-w"></i> Premium-Paket
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Für anspruchsvolle Unternehmen</h5>
                <p class="package-price text-success">2.599€</p>
                <p class="card-text flex-grow-1">
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Webdesign für bis zu 10 Seiten<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweifärbiges Logo, 3 Änderungen<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweiseitige Visitenkarten (500 Stück)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Domainpaket (jährliche Kosten auf Anfrage)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Umfassende SEO-Optimierung<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Fotografie für die Homepage (bis zu 10 Fotos)<br>
                </p>
                <a href="/kontakt.php" class="btn btn-primary btn-block mt-auto" aria-label="Premium-Paket jetzt anfragen">Jetzt Anfragen</a>
              </div>
            </div>
          </div>

          <!-- Exklusive-Paket -->
          <div class="col-md-6 col-lg-4">
            <div class="card package-card shadow-sm border-0">
              <div class="card-header bg-primary text-white">
                <i class="bi bi-gem me-2 icon-s-w"></i> Exklusive-Paket
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Für höchste Ansprüche</h5>
                <p class="package-price text-success">4.599€</p>
                <p class="card-text flex-grow-1">
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Individuelles Webdesign bis zu 15 Seiten<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweifärbiges Logo, unbegrenzte Änderungen<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweiseitige Visitenkarten (500 Stück)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Domainpaket (jährliche Kosten auf Anfrage)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Umfassende SEO-Optimierung<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Fotografie für die Homepage (bis zu 20 Fotos)<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Blog-Erstellung + 2 Blogbeiträge<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Google Business Einrichtung und Optimierung<br>
                </p>
                <a href="/kontakt.php" class="btn btn-primary btn-block mt-auto" aria-label="Exklusive-Paket jetzt anfragen">Jetzt Anfragen</a>
              </div>
            </div>
          </div>



          <!-- SEO-Paket -->
          <div class="col-md-6 col-lg-4">
            <div class="card package-card shadow-sm border-0">
              <div class="card-header bg-success text-white">
                <i class="bi bi-graph-up-arrow me-2"></i> SEO-Optimierung
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Für bessere Platzierungen</h5>
                <p class="package-price text-success">1.499€ <small class="text-secondary fs-6">für 2 Monate</small></p>
                <p class="card-text flex-grow-1">
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> On-Page-Optimierung<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Backlink-Strategie<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Content-Optimierung<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Technisches SEO<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Reporting & Monitoring<br>
                </p>
                <a href="/kontakt.php" class="btn btn-success btn-block mt-auto" aria-label="SEO-Paket jetzt anfragen">Jetzt Anfragen</a>
              </div>
            </div>
          </div>

          <!-- Logo-Paket -->
          <div class="col-md-6 col-lg-4">
            <div class="card package-card shadow-sm border-0">
              <div class="card-header bg-dark text-white">
                <i class="bi bi-brush-fill me-2"></i> Logo-Design
              </div>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Individuelle Logogestaltung</h5>
                <p class="package-price text-success">ab 299€</p>
                <p class="card-text flex-grow-1">
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Einfärbiges Logo<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Zweifärbiges Logo<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> 3 Änderungswünsche<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Druckfertige Dateien<br>
                  <i class="bi bi-check-circle-fill icon-check me-2"></i> Vektorgrafiken<br>
                </p>
                <a href="/kontakt.php" class="btn btn-dark btn-block mt-auto" aria-label="Logo-Paket jetzt anfragen">Jetzt Anfragen</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-banner" class="bg-dark text-white">
      <div class="container text-center">
        <h3 class="mb-3">Nicht das Richtige gefunden?</h3>
        <p class="lead mb-4">Kontaktieren Sie uns für individuelle Anfragen und maßgeschneiderte Lösungen. Wir finden das passende Angebot für Sie!</p>
        <a href="/kontakt.php" class="btn btn-primary btn-lg">Kontaktieren Sie uns</a>
      </div>
    </section>


    <section id="ongoing-services" class="bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Fortlaufende Dienstleistungen (extra berechnet)</h2>

        <div class="row">
          <div class="col-lg-6 mb-4">
            <h4 class="text-primary fw-bold">SEO-Monitoring und Optimierung für besseres Ranking</h4>
            <p><b>Preis:</b> 600€/Monat</p>
            <p><strong>Vorteil zur bezahlten Werbung:</strong> SEO bietet langfristige Vorteile durch bessere organische Platzierungen, während bezahlte Werbung nur während der Kampagnenlaufzeit sichtbar ist. SEO kann dir also stetig neuen Traffic bringen, auch ohne laufende Werbeausgaben.</p>
          </div>
          <div class="col-lg-6 mb-4">
            <h4 class="text-primary fw-bold">Google Ads Kampagnenmanagement</h4>
            <ul>
              <li><strong>Einrichtung und Optimierung:</strong> 300€ einmalig</li>
              <li><strong>Überwachung und Optimierung:</strong> 200€/Monat</li>
              <li><strong>Erstellung von Anzeigen und Texten:</strong> 100€/Kampagne</li>
            </ul>
            <p><strong>Vorteil von Google Ads:</strong> Ermöglicht schnelle, gezielte Reichweite mit sofortigen Ergebnissen, ideal für kurzfristige Marketingziele.</p>
          </div>
        </div>

        <hr class="my-4">

        <div class="row">
          <div class="col-lg-6 mb-4">
            <h4 class="text-primary fw-bold">Weitere optionale Dienstleistungen</h4>
            <ul>
              <li><strong>Kontinuierliche Blogbeiträge:</strong> 199€/Monat (2 Beiträge/Monat)</li>
              <li><strong>Social Media Management:</strong> 299€/Monat (Facebook, Instagram, LinkedIn)</li>
              <li><strong>Google My Business Optimierung:</strong> 99€/Monat</li>
              <li><strong>Wartung und Sicherheitsupdates für die Website:</strong> 49€/Monat</li>
              <li><strong>Erweiterte Sicherheitsmaßnahmen:</strong> Preis auf Anfrage (regelmäßige Audits, Updates)</li>
              <li><strong>E-Mail-Marketing-Kampagnen:</strong> 99€/Kampagne</li>
            </ul>
          </div>
          <div class="col-lg-6 mb-4 d-flex align-items-center">
            <div>
              <p>Unsere fortlaufenden Dienstleistungen bieten dir die Flexibilität, spezifische Aspekte deiner Online-Präsenz gezielt zu verbessern. Egal, ob es um SEO, Social Media, oder die Sicherheit deiner Webseite geht – wir unterstützen dich kontinuierlich.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="faq">
      <div class="container">
        <h2 class="text-center mb-5">FAQ - Häufig gestellte Fragen</h2>

        <div class="accordion" id="faq-accordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1-collapse" aria-expanded="false" aria-controls="faq-1-collapse">
                Wie lange dauert die Erstellung einer Website?
              </button>
            </h2>
            <div id="faq-1-collapse" class="accordion-collapse collapse" aria-labelledby="faq-1" data-bs-parent="#faq-accordion">
              <div class="accordion-body">
                <p>Die Dauer der Webseitenerstellung hängt von verschiedenen Faktoren ab, wie z.B. der Größe der Website, der Anzahl der Seiten, der Komplexität des Designs und der Funktionalitäten. In der Regel dauert die Erstellung einer Website zwischen 4 und 8 Wochen.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2-collapse" aria-expanded="false" aria-controls="faq-2-collapse">
                Was ist SEO und warum ist es wichtig?
              </button>
            </h2>
            <div id="faq-2-collapse" class="accordion-collapse collapse" aria-labelledby="faq-2" data-bs-parent="#faq-accordion">
              <div class="accordion-body">
                <p>SEO (Search Engine Optimization) ist die Optimierung einer Website für Suchmaschinen wie Google, um die Sichtbarkeit und das Ranking in den Suchergebnissen zu verbessern. SEO ist wichtig, da die meisten Nutzer nur die ersten Ergebnisse einer Suchanfrage ansehen und eine gute Platzierung in den Suchergebnissen zu mehr Traffic und Conversions führt.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3-collapse" aria-expanded="false" aria-controls="faq-3-collapse">
                Was ist der Unterschied zwischen Webdesign und Webentwicklung?
              </button>
            </h2>
            <div id="faq-3-collapse" class="accordion-collapse collapse" aria-labelledby="faq-3" data-bs-parent="#faq-accordion">
              <div class="accordion-body">
                <p>Webdesign bezieht sich auf das visuelle und ästhetische Erscheinungsbild einer Website, während Webentwicklung die technische Umsetzung und Programmierung einer Website umfasst. Webdesigner gestalten das Layout, die Farben, Schriftarten und Bilder einer Website, während Webentwickler die Funktionalitäten und Interaktionen implementieren.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4-collapse" aria-expanded="false" aria-controls="faq-4-collapse">
                Welche Zahlungsmethoden akzeptiert WebDesign Alcor?
              </button>
            </h2>
            <div id="faq-4-collapse" class="accordion-collapse collapse" aria-labelledby="faq-4" data-bs-parent="#faq-accordion">
              <div class="accordion-body">
                <p>WebDesign Alcor akzeptiert Zahlungen per Überweisung, PayPal und Kreditkarte. Die Zahlungsmodalitäten werden individuell mit jedem Kunden vereinbart, abhängig von den vereinbarten Leistungen und dem Umfang des Projekts.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="faq-5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5-collapse" aria-expanded="false" aria-controls="faq-5-collapse">
                Bietet WebDesign Alcor eine Ratenzahlung an?
              </button>
            </h2>
            <div id="faq-5-collapse" class="accordion-collapse collapse" aria-labelledby="faq-5" data-bs-parent="#faq-accordion">
              <div class="accordion-body">
                <p>Ja, WebDesign Alcor bietet eine flexible Ratenzahlungsmöglichkeit an. Diese wird durch einen Ratenzahlungsvertrag geregelt, der es Ihnen ermöglicht, die Kosten für Ihr Webdesign-Projekt in bequemen Raten zu begleichen. Sprechen Sie uns an, um die Details und Bedingungen individuell zu besprechen.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <section class="latest-blogs bg-light">
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
