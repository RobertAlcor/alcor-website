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
  <title>Webdesign & SEO Agentur Wien | Schon ab €799,- | Alcor</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://www.webdesign-alcor.at/index.php">

  <meta name="description" content="Webdesign in Wien und SEO-Optimierung. Professionelle Websites für Unternehmen in Wien Liesing. Kontaktieren Sie uns für Webdesign und SEO.">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Webdesign Wien, SEO Wien, Webdesigner Wien, Webdesign Agentur Wien, SEO Lösungen Wien">
  <meta name="author" content="WebDesign Alcor">
  <meta name="page-topic" content="Webdesign Services">
  <meta name="page-type" content="Business">
  <meta name="audience" content="All">
  <meta name="distribution" content="Global">
  <meta name="language" content="de">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook Meta-Tags -->
  <meta property="og:title" content="Webdesign & SEO Agentur Wien | Schon ab €799,- | Alcor">
  <meta property="og:description" content="Webdesign in Wien und SEO-Optimierung. Professionelle Websites für Unternehmen in Wien Liesing. Kontaktieren Sie uns für Webdesign und SEO.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.webdesign-alcor.at/index.php">
  <meta property="og:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta property="og:site_name" content="WebDesign Alcor">
  <meta property="og:locale" content="de_AT">

  <!-- Twitter Card Daten -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Webdesign in Wien und SEO-Optimierung. Professionelle Websites für Unternehmen in Wien Liesing. Kontaktieren Sie uns für Webdesign und SEO.">
  <meta name="twitter:title" content="Webdesign & SEO Agentur Wien | Schon ab €799,- | Alcor">
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" async>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/styles.min.css">

  <!-- Google tag (gtag.js) - Async Loading -->
  <script id="gtag-init" type="text/plain"></script>
  <script id="gtag-config" type="text/plain"></script>

  <!-- Structured Data (JSON-LD) -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "WebDesign-Alcor",
      "url": "https://www.webdesign-alcor.at/index.php",
      "logo": "https://www.webdesign-alcor.at/assets/logo/alcor.jpg",
      "image": [
        "https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg",
        "https://www.webdesign-alcor.at/assets/logo/webdesign-wien.jpg"
      ],
      "description": "Top Webdesigner in Wien bieten Ihnen das, was Sie haben wollen! Ragen Sie mit Ihrem Webdesign in Wien aus der Masse heraus. Kontaktieren Sie uns noch heute!",
      "telephone": "+4366499124999",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Johann-Teufel-Gasse 39-47/11/2",
        "addressLocality": "Wien",
        "postalCode": "1230",
        "addressCountry": "AT"
      },
      "openingHoursSpecification": [{
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      }],
      "priceRange": "€€-€€€",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "6"
      },
      "review": [{
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "BESTCONNECTION"
          },
          "datePublished": "2024-01-10",
          "description": "Äußerst Zufrieden mit der Zusammenarbeit. Die Umsetzung hat problemlos funktioniert sowie Wünsche und Änderungen wurden schnell berücksichtigt. Missverständnisse konnten gut aus dem Weg geräumt werden. Ich danke vielmals für die Zusammenarbeit und kann WebDesign-Alcor nur weiterempfehlen.",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "MASSAGEWELT WIEN"
          },
          "datePublished": "2023-12-15",
          "description": "Ich bin mit der Zusammenarbeit von webdesign-alcor äußerst zufrieden. Jede Änderung wurde prompt erfüllt. Kritische Punkte konnten für mich als Laie verständlich erklärt werden und Missverständnisse wurden professionell aus dem Weg geräumt. Ich kann webdedign-alcor mit reinem Herzen weiter empfehlen.",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "DANIEL G."
          },
          "datePublished": "2023-09-20",
          "description": "Die Bewertung für diese Agentur gebe ich mit größter Zufriedenheit. Meine gewünschte Webseite wurde wunderschön erstellt. Dazu habe ich passende Logos, Visitenkarten und Briefpapier erhalten. Alles für meinen perfekten Start. Ich konnte jetzt schon einige Kunden mit meiner Webseite begeistern. Webdesign-Alcor kann ich mit gutem gewissen jedem empfehlen, der auf Qualität und Kundenzufriedenheit steht. Hier wird durch die dauernde sofortige Erreichbarkeit jeder Wunsch umgesetzt und das ohne weitere Kosten! Einfach nur TOP!",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "Jade Angel - Mistress Jade"
          },
          "datePublished": "2022-06-12",
          "description": "Ich habe lange nach einem guten Webdesigner gesucht und endlich hier gefunden. Meine Vorstellungen sind sogar weit übertroffen worden! Hier passt einfach alles von der Ideenverwirklichung bis hin zum letzten Feinschliff wird alles umgesetzt. Und das Ergebnis ist eine exklusive und einzigartige Website denn Massenabfertigung wird hier strikt abgelehnt!",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "Christoph G."
          },
          "datePublished": "2022-03-11",
          "description": "Absolut empfehlenswert! Bin mit der geleisteten Arbeit mehr als zufrieden. Antwortet schnell, geht zu 100% auf individuelle Wünsche und Anforderungen ein und setzt diese hoch professionell sowie kreativ um. Klare Weiterempfehlung!!",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          }
        },
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": "Katharina K."
          },
          "datePublished": "2023-08-12",
          "description": "Absolut empfehlenswert! Bin mit der geleisteten Arbeit mehr als zufrieden. Antwortet schnell, geht zu 100% auf individuelle Wünsche und Anforderungen ein und setzt diese hoch professionell sowie kreativ um. Klare Weiterempfehlung!!",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5",
            "bestRating": "5"
          }
        }
      ],
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
      "slogan": "Ihr Erfolg ist unser Ziel"
    }
  </script>


</head>


<body>
  <?php include 'includes/social-sharing.php'; ?>
  <?php include 'includes/navigation.php'; ?>

  <!-- Hero Section -->
  <header id="hero" role="banner" aria-label="Hauptbanner">
    <div class="container">
      <div class="row pt-lg-0 pt-5 text-center text-lg-start align-items-end">
        <div class="col-lg-8 col-xl-6 mb-5 pb-0 pb-lg-5 mt-0 mt-md-5">

          <h1 class="display-5 fw-bolder text-dark mb-3"><strong>Webdesign und SEO in Wien Liesing ab € 799,-</strong></h1>
          <h2 class="lead fw-bold d-none">Webagentur in Wien für erstklassiges Webdesign</h2>
          <h3 class="text-accent fw-bold fs-5 mb-3"><strong>Webdesign Agentur in Wien</strong> für Privatpersonen und Unternehmer in ganz Österreich</h3>
          <p>
            <strong>Webdesign in Wien</strong> – optimale Homepages für Unternehmen und Privatpersonen. Unsere Webdesigner in Wien entwickeln individuelle Lösungen, die genau auf Ihre Bedürfnisse abgestimmt sind.
          </p>
          <div class="google-review-stars py-2">
            <span class="average-rating">
              <img src="/assets/icons/google.webp" alt="Webdesign Alcor Google Bewertung">
              <span class="fw-bold">Google Review Score:</span>
              <span id="average-score" class="mx-2 fw-bold"></span>
              <span id="average-stars"></span>
            </span>
          </div>

          <div class="hero-buttons pt-3 d-flex flex-column flex-md-row align-items-start justify-content-center">
            <a href="/services.php" class="btn btn-primary btn-lg mb-3 mb-md-0 me-0 me-md-4" aria-label="Mehr über unsere Services erfahren">
              <i class="bi bi-rocket-takeoff"></i> LEISTUNGEN
            </a>
            <a href="/webdesign-preise.php" class="btn btn-lg btn-outline" aria-label="Webdesign Preise">
              <i class="bi bi-currency-exchange me-1"></i> PREISE
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-xl-6 mb-0">
          <img src="/assets/img/heroimgzwei.webp" alt="Beispiel für maßgeschneidertes Webdesign in Wien" class="img-fluid px-0 px-sm-5 px-lg-0" width="600" height="400">
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
      getBreadcrumbs('/index.php');
      ?>
    </div>
  </section>

  <main>
    <section id="webdesign-intro">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-8">
            <h2>Webdesign in Wien</h2>
            <h3 class="text-accent fw-bold">Ihre Webdesign Agentur im 23. Bezirk, <a href="/posts/ux-webdesign-liesing.php">Liesing</a></h3>
            <p>Suchen Sie nach einem professionellen Webdesign in Wien, das bei Google Top-Positionen erreicht? Mit unseren Services erhalten Sie Webseiten, die sowohl technisch einwandfrei als auch optisch beeindruckend sind.</p>

            <p><a href="/about.php">Wir</a> sind mehr als eine herkömmliche Webdesign-Agentur in Wien. Unsere <strong>Webdesigner in Wien</strong> erstellen Homepages, die <a href="/posts/ux-webdesign-liesing.php">ästhetisch ansprechend</a> und technisch erstklassig sind. Jetzt Angebot über das Kontaktformular einholen und überzeugen Sie sich selbst.
            </p>
            <a href="/kontakt.php" class="btn btn-primary text-center mt-3"><i class="bi bi-cursor-fill me-2"></i> jetzt unverbindliches Angebot anfordern</a>
          </div>
        </div>
      </div>
    </section>

    <section id="warum-wir" class="pb-0 bg-light">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8 col-12 text-center">
            <h2 class="display-6 fw-bold">Warum WebDesign Alcor in Wien wählen?</h2>
            <p>Webdesign in Wien ist unsere Leidenschaft. Unsere <strong>Webdesigner in Wien</strong> erstellen <a href="/posts/handprogrammierte-webseiten-vs-wordpress.php">handcodierte Webseiten ohne WordPress</a>, die zahlreiche Vorteile bieten:</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 order-2 order-md-2">
            <div id="feature_list">
              <div class="feature shadow-sm">
                <div class="feature-header" data-target="#feature_1">
                  <i class="bi bi-1-circle icon-s"></i>
                  <h3>Ladegeschwindigkeit</h3>
                </div>
                <div id="feature_1" class="feature-content show">
                  <p>Die Ladegeschwindigkeit <a href="/posts/handprogrammierte-webseiten-vs-wordpress.php">handcodierter Webseiten</a> ist deutlich höher, was sowohl Besucher als auch Google zu schätzen wissen. <a href="https://pagespeed.web.dev/">Ein Speedtest von Google</a> zeigt die Vorteile klar auf. Entscheiden Sie sich für Webdesign in Wien mit Alcor und erleben Sie außergewöhnliche Ladezeiten.</p>
                </div>
              </div>
              <div class="feature shadow-sm">
                <div class="feature-header" data-target="#feature_2">
                  <i class="bi bi-2-circle icon-s"></i>
                  <h3>Technische Perfektion</h3>
                </div>
                <div id="feature_2" class="feature-content">
                  <p>Unsere Webseiten sind technisch einwandfrei und vollständig optimiert. Jede Webseite durchläuft eine mehrstufige Prüfung, um alle potenziellen Schwachstellen zu beseitigen. Bei WebDesign Alcor in Wien steht technische Perfektion im Vordergrund.</p>
                </div>
              </div>
              <div class="feature shadow-sm">
                <div class="feature-header" data-target="#feature_3">
                  <i class="bi bi-3-circle icon-s"></i>
                  <h3>Maximale Sicherheit</h3>
                </div>
                <div id="feature_3" class="feature-content">
                  <p>Im Gegensatz zu CMS-basierten Webseiten wie WordPress, die oft Ziel von <a href="/posts/technisch-perfekte-webseiten-vscode.php">Hackerangriffen</a> sind, bieten unsere handcodierten Webseiten ein hohes Maß an Sicherheit. Wählen Sie Webdesign mit WebDesign Alcor für höchste Sicherheit.</p>
                </div>
              </div>
              <div class="feature shadow-sm">
                <div class="feature-header" data-target="#feature_4">
                  <i class="bi bi-4-circle icon-s"></i>
                  <h3>Keine laufenden Kosten</h3>
                </div>
                <div id="feature_4" class="feature-content">
                  <p>Bei uns gibt es keine laufenden Kosten außer für <a href="/faq.php">Domain und Hosting</a>. Keine zusätzlichen Kosten für Plugins, Updates oder Wartung – komplett unabhängig und kosteneffizient. WebDesign Alcor bietet Ihnen Webdesign ohne versteckte Kosten.</p>
                  <a href="/webdesign-preise.php" class="btn btn-outline mt-3">Webdesign Preise</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 order-1 order-md-1 pt-lg-5">
            <img src="/assets/img/warumwirimgzwei.webp" alt="Vorteile von Webdesign bei WebDesign Alcor in Wien" class="img-fluid" width="600" height="400">
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="shadow">
      <div class="container">
        <div class="row justify-content-center d-flex">
          <div class="col-lg-8 col-12 text-center">
            <h2 class="display-6 fw-bold">Das sagen unsere Kunden über unser <strong>Webdesign in Wien</strong></h2>
            <p>Unsere Kunden sind begeistert von unseren <a href="/services.php">Webdesign Services in Wien</a>. Lesen Sie, was sie über uns sagen und warum sie WebDesign Alcor gewählt haben.</p>
          </div>
        </div>
        <div class="row align-items-start">
          <div class="col-12 d-none d-md-block">
            <div class="review-customers d-flex justify-content-center">
              <!-- Bilder und Namen werden dynamisch eingefügt -->
            </div>
          </div>
          <div class="col-12 flex-end">
            <div class="review-customers-content">
              <!-- Bewertungen und Inhalte werden dynamisch angezeigt -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="wein-vergleich" class="p-0">
      <div class="container pt-5">
        <div class="row align-items-center pt-5 text-center text-lg-start">
          <div class="col-lg-6 order-2 order-lg-1 edlerwein p-md-5 py-5 rounded-5">
            <h2 class="display-6 fw-bold">Unser <strong>Webdesign in Wien</strong> ist vergleichbar mit erlesenem Wein.</h2>
            <p>Stellen Sie sich eine gut gestaltete Webseite wie einen kostbaren Tropfen vor. Unsere Webseiten werden genauso sorgfältig und mit ebenso viel Hingabe hergestellt wie ein guter Wein. Alle von uns erstellten Seiten sind einzigartig und beeindrucken durch das
              <a href="/posts/handprogrammierte-webseiten-vs-wordpress.php">handprogrammiertes Design</a> und ästhetische Eleganz.
            </p>
            <p>Unser <a href="/services.php">Service</a> ist darauf ausgerichtet, ein höheres Niveau für Sie zu erreichen. Wir arbeiten von Anfang bis Ende eng mit Ihnen zusammen, um sicherzustellen, dass Ihre Homepage nicht nur ansprechend gestaltet ist, sondern auch technisch reibungslos funktioniert.</p>
            <div class="row">
              <div class="col-md-6 col-lg-10 col-xl-7">
                <a href="/kontakt.php" class="btn btn-primary w-100"><i class="bi bi-envelope-at me-1"></i> Ich möchte ein Angebot</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="/assets/img/wein.webp" alt="Edler Wein als Metapher für hochwertiges Webdesign in Wien" class="img-fluid" width="600" height="400">
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/banner.php'; ?>

    <section id="betreuung" class="py-0">
      <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row pt-5 text-center text-lg-start">
          <div class="col-lg-6 text-end mt-4 mt-md-0 order-2 order-md-1">
            <img src="/assets/img/rundumbetreuung.webp" alt="Rundum-Betreuung für Webdesign in Wien" class="img-fluid" width="600" height="400">
          </div>
          <div class="col-lg-6 order-1 order-md-2 p-md-5 pt-5 rounded-5 rundum-translate">
            <h2 class="display-6 fw-bold"><strong>Webdesign Rundum-Betreuung in Wien</strong></h2>
            <p>Nachdem wir Ihre Webseite programmiert und technisch optimiert haben, bedarf es nur einer quartalsmäßigen Überprüfung, ob die Links noch aktuell sind und die Bilder die richtige Zuweisung haben. Wir bieten Ihnen eine umfassende Betreuung und regelmäßige Updates, um sicherzustellen, dass Ihre Webseite immer auf dem neuesten Stand ist.</p>
            <p>Im Gegensatz zu WordPress benötigen unsere handcodierten Webseiten keine ständigen Plugin-Updates und verursachen keine zusätzlichen laufenden Kosten. Sie zahlen lediglich für Domain und Hosting – das war’s! Unsere <a href="/services.php">Webdesign Services</a> bieten Ihnen die Sicherheit und Stabilität, die Ihr Unternehmen benötigt.</p>
            <p>Mit unserer <a href="/kontakt.php">Webdesign Rundum Betreuung in Wien</a> können Sie sich darauf verlassen, dass Ihre Webseite immer optimal funktioniert und Ihre Homepage jederzeit aktuell und sicher ist.</p>
          </div>
        </div>
      </div>
    </section>



    <section id="seo" class="bg-dark text-light mt-5 mt-lg-0">
      <div class="container">
        <div class="row align-items-center text-center text-lg-start">
          <div class="col-lg-6">
            <h2 class="display-6 fw-bold">SEO in Wien</h2>
            <p><a href="/posts/local-seo-optimierung.php">Suchmaschinenoptimierung (SEO)</a> ist essenziell für jede Webseite. Mit unserer <strong>SEO in Wien</strong> sorgen wir dafür, dass Ihre Webseite bei Google auf Seite 1 erscheint. Unsere erfahrenen SEO-Spezialisten analysieren Ihre Webseite und entwickeln eine maßgeschneiderte Strategie, um Ihre <a href="/about.php">Sichtbarkeit</a> zu maximieren. Dabei optimieren wir sowohl den Inhalt als auch die technischen Aspekte Ihrer Webseite.</p>
            <p>Unsere <a href="/services.php">SEO-Betreuung in Wien</a> stellt sicher, dass Ihre Webseite bei Google und anderen Suchmaschinen gefunden wird.</p>
            <a href="/kontakt.php" class="btn btn-primary"><i class="bi bi-envelope-at me-2"></i> Jetzt anfragen</a>
          </div>
          <div class="col-lg-6 imgbgseo mt-5 mt-lg-0">
            <img src="/assets/img/member2.webp" alt="Suchmaschinenoptimierung in Wien" class="img-fluid rounded shadow imgbgseo" width="600" height="400">
          </div>
        </div>
      </div>
    </section>

    <section id="unterschied" class="overflow-hidden mb-5">
      <div class="container mb-lg-5">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-12 col-md-10 comparison-header">
            <h2 class="display-6 fw-bold">Unterschied zwischen <a href="/posts/handprogrammierte-webseiten-vs-wordpress.php">handcodierten Webseiten und WordPress Webdesign</a></h2>
            <p class="lead">
              Mit einer handcodierten Webdesign Homepage sparen Sie mehrere tausend Euro an Wartungs- und Zusatzkosten.
            </p>
            <div class="site-buttons mt-3">
              <a href="tel:+4366499124999" class="btn btn-primary btn-lg" aria-label="Jetzt anrufen">
                <i class="bi bi-telephone-forward me-3"></i> Jetzt Anrufen
              </a>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-lg-6 mb-4 ring-left order-2 order-lg-1">
            <div class="comparison-card p-4">
              <span class="badge bg-success position-absolute top-0 end-0 m-3">Empfohlen</span>
              <div class="d-flex align-items-center mb-3 mt-3 mt-sm-0">
                <i class="bi bi-code-slash icon-m me-2"></i>
                <h3 class="mb-0 fw-bold">Handcodiertes Webdesign in Wien</h3>
              </div>
              <hr>
              <ul class="list-unstyled">
                <li><i class="bi bi-lightning-fill me-2 text-success"></i> Blitzschnelle Ladezeiten</li>
                <li><i class="bi bi-shield-lock-fill me-2 text-success"></i> Höchste Sicherheit</li>
                <li><i class="bi bi-check-circle-fill me-2 text-success"></i> Vollständige Optimierung</li>
                <li><i class="bi bi-wallet2 me-2 text-success"></i> Keine laufenden Kosten außer für <a href="/faq.php" aria-label="weiterleitung zu FAQ Seite"> Domain und Hosting</a></li>
                <li><i class="bi bi-code-slash me-2 text-success"></i> Sauberer, ordentlicher Code mit flacher Hierarchie</li>
                <li><i class="bi bi-graph-up-arrow me-2 text-success"></i> Keine zusätzlichen SEO-Kosten</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 mb-0 mb-md-4 ring-right order-1 order-lg-2">
            <div class="comparison-card p-4 bg-light">
              <div class="d-flex align-items-center mb-3">
                <i class="bi bi-wordpress icon-m me-2"></i>
                <h3 class="mb-0 fw-bold"><strong>Webdesign mit WordPress in Wien</strong></h3>
              </div>
              <hr>
              <ul class="list-unstyled">
                <li><i class="bi bi-slash-circle-fill me-2 text-danger"></i> Häufig langsamer</li>
                <li><i class="bi bi-exclamation-triangle-fill me-2 text-danger"></i> Anfälliger für <a href="/posts/technisch-perfekte-webseiten-vscode.php" aria-label="weiterleitung zur blogseite technisch perfekte webseiten"> Hackerangriffe</a></li>
                <li><i class="bi bi-tools me-2 text-danger"></i> Regelmäßige Wartung erforderlich</li>
                <li><i class="bi bi-currency-dollar me-2 text-danger"></i> Laufende Kosten für Plugins und Updates</li>
                <li><i class="bi bi-bug-fill me-2 text-danger"></i> Fehlerhafte Codestrukturen und sehr unübersichtlich</li>
                <li><i class="bi bi-trophy-fill me-2 text-danger"></i> Nur mit Premium-Erweiterungen zum Ziel (Kosten)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="bg-light">
      <div class="container">
        <div class="row d-flex justify-content-center text-center text-lg-start align-items-center">
          <div class="col-lg-6">
            <h2 class="display-6 fw-bold">Kostengünstiges Webdesign</h2>
            <p><a href="/services.php">Top Webdesign</a> und perfekte <a href="/posts/local-seo-optimierung.php">SEO-Optimierung</a> sind das Aushängeschild Ihres Unternehmens. Wir sorgen dafür, dass Ihre Webseite ansprechend, funktional und sicher ist.</p>
            <p class="lead fw-bold text-accent fs-3">
              Wünschen Sie eine Webseite, die reibungslos und ohne zusätzliche Kosten funktioniert?
            </p>
            <p>
              Machen Sie den ersten Schritt in eine erfolgreiche Zukunft. <br><a href="/kontakt.php" class="fw-bold">Kontaktieren Sie uns noch heute</a> für eine kostenlose Beratung.
            </p>
          </div>
          <div class="col-lg-6 d-none d-md-block">
            <div class="blogpost-placeholder-img rounded-3">
              <img src="/assets/img/contact-bg-webdesign-wien.webp" alt="Webdesign Wien Alcor kontaktieren" class="img-fluid shadow rounded-3">
            </div>
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



    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript-Dateien -->
    <!-- External JS Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <!-- Custom JS -->
    <script src="/assets/js/app.min.js" defer></script>
</body>
