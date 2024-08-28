<?php
function getLatestBlogPosts($limit = 4)
{
  $blogposts = glob(dirname(__FILE__) . '/../posts/*.php');
  $posts_with_dates = [];

  if ($blogposts && count($blogposts) > 0) {
    foreach ($blogposts as $file) {
      ob_start();
      include $file;
      $post = ob_get_clean();

      preg_match('/<h1[^>]*class="[^"]*blog-h1[^"]*"[^>]*>(.*?)<\/h1>/s', $post, $title_matches);
      preg_match('/<img[^>]*src="([^"]+)"[^>]*class="[^"]*blog-img[^"]*"/si', $post, $image_matches);
      preg_match('/<p[^>]*class="[^"]*blog-datum[^"]*"[^>]*>(.*?)<\/p>/s', $post, $date_matches);

      $title = isset($title_matches[1]) ? trim($title_matches[1]) : 'Kein Titel gefunden';
      $image = isset($image_matches[1]) ? trim($image_matches[1]) : '/path/to/default-image.jpg';
      $date = isset($date_matches[1]) ? trim($date_matches[1]) : 'Kein Datum gefunden';

      $timestamp = strtotime($date);
      if ($timestamp !== false) {
        $posts_with_dates[] = [
          'file' => $file,
          'timestamp' => $timestamp,
          'title' => $title,
          'image' => $image,
          'date' => $date
        ];
      }
    }

    // Sortiere die Posts nach Datum (neuste zuerst)
    usort($posts_with_dates, function ($a, $b) {
      return $b['timestamp'] - $a['timestamp'];
    });

    // Begrenze die Anzahl der Posts
    return array_slice($posts_with_dates, 0, $limit);
  }

  return [];
}
