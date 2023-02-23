<?php
// Feed laden und in String umwandeln
$rss_feed = file_get_contents('http://feeds.feedburner.com/ign/all');

// String (mit XML Inhalt) in Objekt umwandeln
$rss_xml = simplexml_load_string($rss_feed);

// Webseite
echo "<h1>Mein RSS Reader</h1>";

// Einzelne Objektelemente auslesen
// In einem RSS Feed sind die Elemente standardisiert
foreach ($rss_xml->channel->item as $item) {
    $title = $item->title;
    $date = $item->pubDate;
    $link = $item->link;
    $description = $item->description;

    echo "<div class='item'>";
    echo "<a href=".$link."><h3>".$title."</h3></a>";
    echo "<p>".$date."<br>";
    echo $description."</p>";
    echo "</div>";
}
?>