<?php

namespace src\model;

abstract class ItemAcervoAbstract {
    public string $titulo;
    public string $codigo;
    public bool $disponivel;

    abstract protected function calcularMulta(int $diaAtraso);
}