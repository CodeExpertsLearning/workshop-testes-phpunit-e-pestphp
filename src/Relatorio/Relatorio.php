<?php

namespace Code\Relatorio;

use Code\Exporters\ExporterInterface;
use Code\Exporters\HTMLExporter;

class Relatorio
{
    public function __construct(private ExporterInterface $exporter)
    {
    }

    public function gerarRelatorio(): string
    {
        $exportarRelatorio = $this->exporter->realizarExport([]);
        return 'Relatório Gerado com Sucesso';
    }
}