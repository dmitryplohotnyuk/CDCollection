<?php

$id = $_GET['id'];
$id = htmlspecialchars($id);

$card = \CDCollection\Collection::getById($id);
$props = $card->getInfo();

foreach($_GET as $key => $value) {
    $props[$key] = $value; 
}

$card->setInfo($props);

if($card->update()) {
    $result['status'] = true;
} else {
    $result['status'] = false;
}

echo json_encode($result);
