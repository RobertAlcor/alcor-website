<?php
// Verzeichnis überprüfen und Blogposts laden
$blogposts = glob(dirname(__FILE__) . '/posts/*.php'); // Alle PHP-Dateien im 'posts'-Verzeichnis laden

?>

<!DOCTYPE html>
<html lang="de">

<head>
  <?php include dirname(__FILE__) . '/includes/cookie-banner.php'; ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Webdesign und SEO in Wien | Alcor</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="canonical" href="https://www.webdesign-alcor.at/blog">
  <meta name="description" content="Lesen Sie die neuesten Artikel und News zu Webdesign und SEO in Wien und Umgebung. Erhalten Sie wertvolle Tipps und Einblicke von WebDesign Alcor.">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Webdesign Blog, SEO Blog, Webdesign Artikel, SEO Tipps, Webdesign Wien, SEO Wien, Webdesign Niederösterreich, Webdesign Burgenland, Webdesign Trends, Webentwicklung Blog">
  <meta name="author" content="WebDesign Alcor">
  <meta name="page-topic" content="Blog">
  <meta name="page-type" content="Blog">
  <meta name="audience" content="All">
  <meta name="distribution" content="Global">
  <meta name="language" content="de">
  <meta name="revisit-after" content="7 days">

  <!-- Open Graph / Facebook Meta-Tags -->
  <meta property="og:title" content="Blog - WebDesign Alcor">
  <meta property="og:description" content="Lesen Sie die neuesten Artikel und News zu Webdesign und SEO in Wien und Umgebung. Erhalten Sie wertvolle Tipps und Einblicke von WebDesign Alcor.">
  <meta property="og:type" content="blog">
  <meta property="og:url" content="https://www.webdesign-alcor.at/blog">
  <meta property="og:image" content="https://www.webdesign-alcor.at/assets/img/webdesign-wien.jpg">
  <meta property="og:site_name" content="WebDesign Alcor">
  <meta property="og:locale" content="de_AT">

  <!-- Twitter Card Daten -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Lesen Sie die neuesten Artikel und News zu Webdesign und SEO in Wien und Umgebung. Erhalten Sie wertvolle Tipps und Einblicke von WebDesign Alcor.">
  <meta name="twitter:title" content="Blog - WebDesign Alcor">
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/assets/css/styles.min.css">
</head>

<body>
  <?php include dirname(__FILE__) . '/includes/navigation.php'; ?>

  <header id="blogheader" class="shadow">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h1 class="fw-bold">BLOG - alle News und relevanten Themen zu Webdesign in Österreich</h1>
          <h2 class="h4">Aktuelle Trends und Tipps rund um Webdesign und SEO in Österreich.</h2>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section class="blog-bg">
      <div class="container">
        <div class="row">
          <!-- Blogposts -->
          <div class="col-lg-12">
            <div class="row g-4">
              <?php
              // Alle Blogposts laden
              $blogposts = glob(dirname(__FILE__) . '/posts/*.php');

              // Blogposts sortieren und vorbereiten
              if ($blogposts && count($blogposts) > 0) {
                $posts_with_dates = [];

                foreach ($blogposts as $file) {
                  ob_start();
                  include_once $file;
                  $post = ob_get_clean();

                  // Daten extrahieren
                  preg_match('/<h1[^>]*class="[^"]*blog-h1[^"]*"[^>]*>(.*?)<\/h1>/s', $post, $title_matches);
                  preg_match('/<img[^>]*src="([^"]+)"[^>]*class="[^"]*blog-img[^"]*"/si', $post, $image_matches);
                  preg_match('/<p[^>]*class="[^"]*blog-datum[^"]*"[^>]*>(.*?)<\/p>/s', $post, $date_matches);
                  preg_match('/<p[^>]*class="[^"]*blog-excerpt[^"]*"[^>]*>(.*?)<\/p>/s', $post, $excerpt_matches);

                  $title = isset($title_matches[1]) ? $title_matches[1] : 'Kein Titel gefunden';
                  $image = isset($image_matches[1]) ? $image_matches[1] : '/path/to/default-image.jpg';
                  $date = isset($date_matches[1]) ? $date_matches[1] : 'Kein Datum gefunden';
                  $excerpt = isset($excerpt_matches[1]) ? $excerpt_matches[1] : 'Kein Auszug gefunden';

                  // Excerpt auf 20 Wörter begrenzen
                  $words = explode(' ', strip_tags($excerpt));
                  if (count($words) > 20) {
                    $excerpt = implode(' ', array_slice($words, 0, 20)) . '...';
                  }

                  $timestamp = strtotime($date);
                  $posts_with_dates[] = ['file' => $file, 'timestamp' => $timestamp, 'title' => $title, 'image' => $image, 'date' => $date, 'excerpt' => $excerpt];
                }

                usort($posts_with_dates, function ($a, $b) {
                  return $b['timestamp'] - $a['timestamp'];
                });

                // Pagination-Parameter
                $posts_per_page = 6;
                $total_posts = count($posts_with_dates);
                $total_pages = ceil($total_posts / $posts_per_page);

                // Aktuelle Seite bestimmen
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $start_index = ($current_page - 1) * $posts_per_page;

                // Anzeige der Beiträge für die aktuelle Seite
                $current_posts = array_slice($posts_with_dates, $start_index, $posts_per_page);

                foreach ($current_posts as $post_data) {
                  $blog_url = '/posts/' . basename($post_data['file']);
              ?>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 rounded-3 border-0 shadow-sm nru">
                      <img src="<?php echo htmlspecialchars($post_data['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($post_data['title']); ?>">
                      <div class="card-body">
                        <a href="<?php echo htmlspecialchars($blog_url); ?>">
                          <h5 class="card-title"><?php echo htmlspecialchars($post_data['title']); ?></h5>
                        </a>
                        <p class="small text-secondary"><?php echo htmlspecialchars($post_data['date']); ?></p>
                        <p class="card-text"><?php echo htmlspecialchars($post_data['excerpt']); ?></p>
                      </div>
                      <div class="card-footer bg-white border-0">
                        <a href="<?php echo htmlspecialchars($blog_url); ?>" class="text-primary fw-bold">Weiterlesen <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
              <?php
                }
              } else {
                echo '<p>Keine Blogposts gefunden.</p>';
              }
              ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center mt-4">
                <?php if ($current_page > 1): ?>
                  <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Vorherige">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                  <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                  </li>
                <?php endfor; ?>

                <?php if ($current_page < $total_pages): ?>
                  <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Nächste">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                <?php endif; ?>
              </ul>
            </nav>

          </div>
        </div>
      </div>
    </section>
  </main>





  <?php include dirname(__FILE__) . '/includes/footer.php'; ?>

  <!-- JavaScript-Dateien -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/app.min.js" defer></script>
</body>

</html>
