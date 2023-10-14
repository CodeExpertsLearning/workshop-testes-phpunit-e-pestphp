<?php

namespace Code\Integration\Relatorio;

use Code\Exporters\HTMLExporter;
use Code\Relatorio\Relatorio;
use PHPUnit\Framework\TestCase;

class RelatorioTest extends TestCase
{
    public function testDeveGerarUmRelatorioComSucesso()
    {
        $exporter = new HTMLExporter();
        $relatorio = new Relatorio($exporter);

        $this->assertEquals(
            'Relatório Gerado com Sucesso',
            $relatorio->gerarRelatorio()
        );
    }
}