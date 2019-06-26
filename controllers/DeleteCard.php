<?php 

$id = $_POST['id'];
$id = htmlspecialchars($id);

$props['id'] = $id;
$cart = new \CDCollection\Card($props);

if($card->delete()) {
    $result['status'] = true;
} else {
    $result['status'] = false;
}

echo json_encode($result);