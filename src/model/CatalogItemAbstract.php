<?php

namespace src\model;

abstract class CatalogItemAbstract {
    public string $title;
    public string $code;
    public bool $available;

    abstract protected function calculateFine(int $daysOverdue);

    
}