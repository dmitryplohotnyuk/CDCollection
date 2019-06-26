<?php

namespace CDCollection;

class Collection implements CollectionInterface
{
    public static function getAll(): Array
    {
        $cards = [];
        $connection = Connection::getConnection();
        $query = "SELECT * FROM cards";
        if ($result = mysqli_query($connection, $query)) {
            while ($props = $result->fetch_assoc()) {
                $cards[$props['id']] = new Card($props);
            }
            $result->free();
        }
        return $cards;
    }
}