<?php
/* simulate API call */
$article = file_get_contents('article.json');
$event = file_get_contents('event.json');

header('Content-Type: application/json');
echo json_encode(array(
  "response" => array(
     "article" => "",
     "markets" => array()
  )
));