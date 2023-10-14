<?php

namespace Code\Exporters;

interface ExporterInterface
{
    public function realizarExport(array $data): string;
}