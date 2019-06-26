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

    public static function getById(string $id): Card
    {
        $connection = Connection::getConnection();
        $query = "SELECT * FROM cards WHERE id = $id";
        if ($result = mysqli_query($connection, $query)) {
            while ($props = $result->fetch_assoc()) {
                $card = new Card($props);
            }
            $result->free();
        }
        return $card;
    }
}