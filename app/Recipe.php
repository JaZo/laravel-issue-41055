<?php

namespace App;

class Recipe implements \JsonSerializable
{
    public function __construct(
        private array $attributes
    ) {}

    public function jsonSerialize()
    {
        return $this->attributes;
    }
}
