<?php
// Datei: generate_sitemap.php

// Setze die URL deiner Webseite
$siteUrl = "https://www.webdesign-alcor.at";

// Verzeichnis, in dem die Sitemap gespeichert wird
$sitemapFile = __DIR__ . "/sitemap.xml";

// Initialisiere das DOMDocument
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

// Erstelle das URL-Set-Element
$urlset = $dom->createElement('urlset');
$urlset->setAttribute('xmlns', 'https://www.sitemaps.org/schemas/sitemap/0.9');
$dom->appendChild($urlset);

// URLs und ihre Eigenschaften
$urls = [
  "/" => ["priority" => "1.0", "changefreq" => "daily", "lastmod" => date("Y-m-d")],
  "/index.php" => ["priority" => "1.0", "changefreq" => "daily", "lastmod" => date("Y-m-d")],
  "/datenschutz.php" => ["priority" => "0.8", "changefreq" => "monthly", "lastmod" => date("Y-m-d", strtotime("2024-07-13"))],
  "/about.php" => ["priority" => "0.8", "changefreq" => "monthly", "lastmod" => date("Y-m-d", strtotime("2024-07-13"))],
  "/services.php" => ["priority" => "0.8", "changefreq" => "monthly", "lastmod" => date("Y-m-d", strtotime("2024-07-13"))],
  "/kontakt.php" => ["priority" => "0.8", "changefreq" => "monthly", "lastmod" => date("Y-m-d", strtotime("2024-07-13"))],
  "/impressum.php" => ["priority" => "0.5", "changefreq" => "yearly", "lastmod" => date("Y-m-d", strtotime("2024-07-13"))],
  "/faq.php" => ["priority" => "0.8", "changefreq" => "yearly", "lastmod" => date("Y-m-d", strtotime("2024-07-13"))],
  "/blog.php" => ["priority" => "0.8", "changefreq" => "yearly", "lastmod" => date("Y-m-d", strtotime("2024-08-13"))],
];

// URLs zum URL-Set hinzufügen
foreach ($urls as $url => $data) {
  $urlElement = $dom->createElement('url');

  $loc = $dom->createElement('loc', $siteUrl . $url);
  $urlElement->appendChild($loc);

  $lastmod = $dom->createElement('lastmod', $data['lastmod']);
  $urlElement->appendChild($lastmod);

  $changefreq = $dom->createElement('changefreq', $data['changefreq']);
  $urlElement->appendChild($changefreq);

  $priority = $dom->createElement('priority', $data['priority']);
  $urlElement->appendChild($priority);

  $urlset->appendChild($urlElement);
}

// Dynamisches Hinzufügen von Blogposts aus dem 'posts'-Verzeichnis
$postsDir = __DIR__ . '/posts/';
if (is_dir($postsDir)) {
  $postFiles = glob($postsDir . '*.php');
  foreach ($postFiles as $postFile) {
    $postUrl = basename($postFile); // Beibehaltung der .php-Endung
    $urlElement = $dom->createElement('url');

    $loc = $dom->createElement('loc', $siteUrl . '/posts/' . $postUrl);
    $urlElement->appendChild($loc);

    $lastmod = $dom->createElement('lastmod', date("Y-m-d", filemtime($postFile)));
    $urlElement->appendChild($lastmod);

    $changefreq = $dom->createElement('changefreq', 'yearly');
    $urlElement->appendChild($changefreq);

    $priority = $dom->createElement('priority', '0.8');
    $urlElement->appendChild($priority);

    $urlset->appendChild($urlElement);
  }
}

// Speichere die Sitemap-Datei
$dom->save($sitemapFile);

echo "Sitemap erfolgreich generiert.";
