<?php 

foreach($_GET as $key => $value) {
    $props[$key] = htmlspecialchars($value); 
}

$cart = new \CDCollection\Card($props);

if($card->insert()) {
    $result['status'] = true;
} else {
    $result['status'] = false;
}

echo json_encode($result);