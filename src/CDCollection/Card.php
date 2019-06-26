<?php

namespace CDCollection;

class Card implements CardInterface
{
    private $id;
    private $cover;
    private $title;
    private $artist;
    private $year;
    private $duration;
    private $purchase_date;
    private $cost;
    private $code;

    private $connection;

    public function __CONSTRUCT(Array $props)
    {
        $this->setInfo($props);
        $this->connection = Connection::getConnection();
    }

    public function insert(): void
    {
       mysqli_query($connection, "INSERT INTO cards (cover, title, artist, year, duration, purchase_date, cost, code) 
                    VALUES ($this->cover, $this->title, $thist->artist, $this->year, $this->duration, 
                    $thist->purchase_date, $this->cost, $this->code");
    }

    public function update(): void
    {
        mysqli_query($connection, "UPDATE cards SET cover = $this->cover, title = $this->title, artist = $this->artist, 
                    year = $this->year, duration = $this->duration, purchase_date = $this->purchase_date, 
                    cost = $this->cost, code = $this->code WHERE id = $this->id");
    }

    public function delete(): void
    {
       mysqli_query($connection, "DELETE FROM cards WHERE id = $this->id");
    }

    public function setInfo(Array $props): void
    {
        $this->id = $props['id'];
        $this->cover = $props['cover'];
        $this->title = $props['title'];
        $this->artist = $props['artist'];
        $this->year = $props['year'];
        $this->duration = $props['duration'];
        $this->purchase_date = $props['purchace_date'];
        $this->cost = $props['cost'];
        $this->code = $props['code'];
    }

    public function getInfo(): Array
    {
       $result = ['id' => $this->id, 'cover' => $this->cover, 'title' => $this->title, 
                'artist' => $this->artist, 'yaer' => $this->year, 'duration' => $this->duration, 
                'purchase_date' => $this->purchase_date, 'cost' => $this->cost, 'code' => $this->code];
        return $result;
    }

}
