<?php

namespace CDCollection;

interface CardInterface
{
    public function insert(): void;
    public function update(): void;
    public function delete(): void;
    public function setInfo(Array $props): void;
    public function getInfo(): Array;
}