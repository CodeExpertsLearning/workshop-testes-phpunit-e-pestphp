<?php

namespace Code\Unit;

use Code\Soma;
use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase
{
    public function testDadoOPassarDeDoisInteirosQueroASomaRetornada()
    {
        $soma = (new Soma(5, 20))->somar(); // 25

        $this->assertEquals(25, $soma);
    }
}