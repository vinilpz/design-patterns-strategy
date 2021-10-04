<?php

class Orcamento
{
    private $value;

    function __construct($newValue)
    {
        $this->value = $newValue;
    }

    public function getValue()
    {
        return $this->value;
    }

}