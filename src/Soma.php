<?php

namespace Code;

class Soma
{
    public function __construct(private int $num1, private int $num2)
    {
    }

    public function somar(): int
    {
        return $this->num1 + $this->num2;
    }
}