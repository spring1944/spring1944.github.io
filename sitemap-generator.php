<?php

/** 
 * Generate a sitemap in **local**. It won't work in deployment environment.
 * 
 * Usage :
 * `php sitemap.php`
 * 
 * */  


$i;
$urls = array(
    "https://spring1944.net",
    "https://spring1944.net/media",
    "https://spring1944.net/index.html",
    "https://spring1944.net/fr/index.html"
);
$sitemap;
$file_output = "sitemap.xml";

$sitemap = "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">" ;


for ($i = 0; $i < count($urls); $i++) {
    $sitemap .= "
    <url>
        <loc>$urls[$i]</loc>
        <changefreq>monthly</changefreq>
    </url>";
}

$sitemap .= "\n</urlset>";

$fp = fopen($file_output, "w+");
fseek ($fp, 0);
fputs ($fp, $sitemap);
fclose ($fp);