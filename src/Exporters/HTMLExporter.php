<?php

namespace Code\Exporters;

class HTMLExporter implements ExporterInterface
{
    public function realizarExport(array $data): string
    {
        return '<h1>Dados relatório</h1>';
    }
}