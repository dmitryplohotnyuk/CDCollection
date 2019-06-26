<?php

$collection = \CDCollection\Collection::getAll();

$result = [];

foreach($collection as $card) {
    $result[] = $card->getInfo();
}

echo json_encode($result);