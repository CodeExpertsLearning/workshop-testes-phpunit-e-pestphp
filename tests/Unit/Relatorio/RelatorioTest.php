<?php

namespace Code\Unit\Relatorio;

use Code\Exporters\HTMLExporter;
use Code\Relatorio\Relatorio;
use PHPUnit\Framework\TestCase;

class RelatorioTest extends TestCase
{
    public function testSeRelatorioERetornadoComSucesso()
    {
        $relatorio = new Relatorio($this->getExporterMock());
        $relatorio = $relatorio->gerarRelatorio();

        $this->assertEquals('Relatório Gerado com Sucesso', $relatorio);
    }

    public function testRelatorioDeveLancarUmaExceptionParaANaoDependenciaDeUmExporter()
    {
        $this->expectException(\ArgumentCountError::class);
        //$this->expectExceptionMessage("Relatório não exportado...");

        new Relatorio();
    }

    private function getExporterMock()
    {
        $mock = $this->getMockBuilder(HTMLExporter::class)
            ->onlyMethods(['realizarExport'])
            ->getMock();

        $mock->expects($this->once())
            ->method('realizarExport')
            ->with([])
            ->willReturn('<h1>Dados relatório</h1>');

        return $mock;
    }
}