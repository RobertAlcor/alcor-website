<?php
session_start();
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <?php include 'includes/cookie-banner.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontakt | Professionelles Webdesign und SEO in Wien | Alcor</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://www.webdesign-alcor.at/kontakt">

  <meta name="description" content="Kontaktieren Sie WebDesign Alcor für maßgeschneiderte Webdesign und SEO in Wien. Beratung und Lösungen für Ihre Homepage.">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Webdesign Wien, Webdesigner Wien, Webdesign Agentur Wien, Webdesign Firmen Wien, Webentwicklung Wien, SEO Wien, WebDesign Alcor, Kontakt Webdesign Wien, Kundenservice Webdesign, SEO Beratung Wien">
  <meta name="author" content="WebDesign Alcor">
  <meta name="page-topic" content="Kontaktseite">
  <meta name="page-type" content="Kontakt">
  <meta name="audience" content="All">
  <meta name="distribution" content="Global">
  <meta name="language" content="de">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook Meta-Tags -->
  <meta property="og:title" content="Kontaktieren Sie WebDesign Alcor - Webdesign und SEO in Wien">
  <meta property="og:description" content="Kontaktieren Sie WebDesign Alcor für maßgeschneiderte Webdesign- und SEO-Dienstleistungen. Lassen Sie uns Ihre Website optimieren und zum Erfolg führen.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.webdesign-alcor.at/kontakt">
  <meta property="og:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta property="og:site_name" content="WebDesign Alcor">
  <meta property="og:locale" content="de_AT">

  <!-- Twitter Card Daten -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Kontaktieren Sie WebDesign Alcor für professionelle Webdesign- und SEO-Dienstleistungen in Wien. Lassen Sie uns gemeinsam Ihre Online-Präsenz verbessern.">
  <meta name="twitter:title" content="Kontaktieren Sie WebDesign Alcor - Webdesign und SEO in Wien">
  <meta name="twitter:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta name="twitter:site" content="@webdesignalcor">
  <meta name="twitter:creator" content="@webdesignalcor">

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
      "@type": "ContactPage",
      "mainEntity": {
        "@type": "Organization",
        "name": "WebDesign Alcor",
        "url": "https://www.webdesign-alcor.at/",
        "logo": "https://www.webdesign-alcor.at/assets/logo/alcor.jpg",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+4366499124999",
          "contactType": "customer service",
          "areaServed": ["Wien", "Niederösterreich", "Burgenland", "Steiermark", "Salzburg", "Kärnten", "Oberösterreich", "Tirol", "Vorarlberg"],
          "availableLanguage": ["German", "English", "Polish"],
          "contactOption": ["TollFree", "HearingImpairedSupported"],
          "email": "office@webdesign-alcor.at"
        },
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Johann-Teufel-Gasse 39-47/11/2",
          "addressLocality": "Wien",
          "postalCode": "1230",
          "addressCountry": "AT"
        },
        "openingHoursSpecification": {
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
        },
        "sameAs": [
          "https://www.facebook.com/webagenturalcor",
          "https://www.instagram.com/webdesign_alcor/"
        ]
      }
    }
  </script>

</head>

<body>
  <?php include 'includes/navigation.php'; ?>

  <section class="sec-small d-none">
    <div class="container">
      <!-- Breadcrumb Navigation -->
      <?php
      include('includes/breadcrumbs.php');
      getBreadcrumbs('kontakt');
      ?>
    </div>
  </section>

  <main>
    <section aria-label="Kontaktformular">
      <div class="container mb-lg-5">
        <div class="row text-center text-md-start">
          <h1 class="fw-bold">Kontaktieren Sie uns</h1>
          <p class="mb-4">Füllen Sie das folgende Formular aus und wir werden uns umgehend bei Ihnen melden.</p>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6">
            <div id="display-errors" style="color:red;margin-bottom:1rem"></div>
            <form id="contact-form" action="send_mail.php" method="POST" aria-label="Kontaktformular">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($_SESSION['token'], ENT_QUOTES, 'UTF-8'); ?>">
              <input type="hidden" name="start_time" value="<?php echo time(); ?>">
              <input type="text" name="your_email" style="display:none;"> <!-- Honeypot field -->
              <div>
                <div class="mb-3">
                  <label for="name" class="form-label fw-bold">NAME <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" required autocomplete="off">
                </div>
                <div class="mb-3">
                  <label for="company" class="form-label fw-bold">FIRMA</label>
                  <input type="text" class="form-control" id="company" name="company" autocomplete="off">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label fw-bold">RÜCKRUF?</label>
                  <input type="text" class="form-control" id="phone" placeholder=" +43" name="phone" autocomplete="off">
                </div>
                <div class="mb-3">
                  <label for="emailadr" class="form-label fw-bold">E-MAIL ADRESSE <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="emailadr" name="email" required autocomplete="email">
                </div>
                <div class="mb-3">
                  <label for="Textarea" class="form-label fw-bold">IHRE NACHRICHT <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="Textarea" rows="8" name="message" required></textarea>
                </div>
                <div class="dsgvo mb-3">
                  <input class="form-check-input me-2" name="agreement" type="checkbox" id="inlineCheckbox" value="Datenschutz" required>
                  <span class="text-danger">*</span> Ich habe die <a href="datenschutz">Datenschutzbestimmungen</a> zur Kenntnis genommen.
                </div>
                <div class="col-12 text-center text-lg-start">
                  <button class="btn btn-primary fs-5" id="btn-submit" type="submit" aria-label="Formular absenden"><i class="bi bi-send"></i> SENDEN</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 mt-5 mt-lg-0 text-center text-lg-start">
            <h2 class="fs-2 fw-bold text-accent">Kontaktieren Sie Ihre Webdesign Agentur in Wien</h2>
            <p>
              Sie suchen eine verlässliche <strong>Webdesign Agentur in Wien</strong>, die Ihren Anforderungen gerecht wird? <a href="index">Bei uns</a>, Ihrer vertrauenswürdigen Webagentur in Wien, sind Sie genau richtig!
            </p>
            <img src="./assets/logo/alcorlogoweiss.svg" alt="Webdesign Alcor Logo" class="img-fluid w-50 my-4 mb-5" id="header-logo" title="webdesign in Wien" width="600" height="400">
            <h3 class="fs-5 text-primary d-none d-lg-block">Wir sind für Sie da!</h3>
            <p class="d-none d-lg-block">
              Als erfahrene <strong>Webdesigner in Wien</strong> kennen wir die Feinheiten eines wirkungsvollen Webdesigns. Egal, ob Sie eine vollständige Homepage Erstellung benötigen oder Ihr bestehendes Webdesign auffrischen möchten, wir sind für Sie da.
            </p>
            <h4 class="fs-6">Unsere Öffnungszeiten</h4>
            <p><b>Montag bis Freitag</b>: 09:00 - 18:00 Uhr<br>
              <b>Wochenende und Feiertage</b>: Exklusiv für Kunden <br>
              <b>E-Mail</b>: office@webdesign-alcor.at <br>
              <b>Mobil</b>: +43 664 99 124 999
            </p>
          </div>
        </div>
      </div>
    </section>



  </main>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- JavaScript-Dateien -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="/assets/js/app.min.js" defer></script>
</body>

</html>
