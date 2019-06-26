<?php

$id = $_POST['id'];
$id = htmlspecialchars($id);

$props['id'] = $id;

$card = \CDCollection\Collection::getById($id);
echo json_encode($card->getInfo());