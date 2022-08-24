<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie[1]->plot;
?>