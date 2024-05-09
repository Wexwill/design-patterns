<?php

namespace PhpSite\DesignPatterns;

class ValueObject
{
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function isEqual(ValueObject $other) {
        return $this->x === $other->getX() && $this->y === $other->getY();
    }
}