<?php

namespace CDCollection;

interface CollectionInterface
{
    public static function getAll(): Array;
    public static function getById(string $id): Card;
}