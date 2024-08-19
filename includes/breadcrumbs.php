<?php
function getBreadcrumbs($currentPage)
{
  $breadcrumbs = array(
    "index.php" => "Home",
    "about.php" => "Über uns",
    "services.php" => "Dienstleistungen",
    "kontakt.php" => "Kontakt",
    "datenschutz.php" => "Datenschutz",
    "impressum.php" => "Impressum"
  );

  echo '<nav aria-label="breadcrumb">
            <ol class="breadcrumb">';

  if ($currentPage == "index.php") {
    echo '<li class="breadcrumb-item active" aria-current="page">' . $breadcrumbs[$currentPage] . '</li>';
  } else {
    echo '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';
    foreach ($breadcrumbs as $page => $name) {
      if ($page == $currentPage) {
        echo '<li class="breadcrumb-item active" aria-current="page">' . $name . '</li>';
      } else if ($page != "index.php") {
        echo '<li class="breadcrumb-item"><a href="' . $page . '">' . $name . '</a></li>';
      }
    }
  }

  echo '</ol>
        </nav>';
}
