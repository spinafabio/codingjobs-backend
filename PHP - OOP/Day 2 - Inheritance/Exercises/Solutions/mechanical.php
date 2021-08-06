<?php

class Mechanical
{
    protected $identity;
    protected $color;

    public function __construct($identity, $color)
    {
        $this->identity = $identity;
        $this->color = $color;
    }
}
