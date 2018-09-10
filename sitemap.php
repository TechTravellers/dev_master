<?php 
//sitemap.php
include "db/db_connect.php";

$query = "SELECT title FROM blog_details";

$result = mysqli_query($con, $query);



$base_url = "http://techtravellers.com/blog/";

header("Content-Type: application/xml; charset=utf-8");

echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL; 

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

 echo '<url>'. PHP_EOL;
 echo '<loc>http://techtravellers.com/index</loc>';
 echo '<changefreq>daily</changefreq>' . PHP_EOL;
 echo '</url>' . PHP_EOL;

  echo '<url>'. PHP_EOL;
  echo '<loc>http://techtravellers.com/stories</loc>';
  echo '<changefreq>daily</changefreq>' . PHP_EOL;
  echo '</url>' . PHP_EOL;
  
  echo '<url>'. PHP_EOL;
  echo '<loc>http://techtravellers.com/gallery</loc>';
  echo '<changefreq>daily</changefreq>' . PHP_EOL;
  echo '</url>' . PHP_EOL;
  
while($row = mysqli_fetch_array($result))
{
 $title = str_replace(' ', '-', $row['title']); 
 echo '<url>' . PHP_EOL;
 echo '<loc>'.$base_url. $title.'/</loc>' . PHP_EOL;
 echo '<changefreq>daily</changefreq>' . PHP_EOL;
 echo '</url>' . PHP_EOL;
}

echo '</urlset>' . PHP_EOL;

?>