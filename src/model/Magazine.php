<?php

namespace src\model;

use Override;

class Magazine extends CatalogItemAbstract 
{
    #[Override]
    protected function calculateFine(int $daysOverdue)
    {
        throw new \Exception('Not implemented');
    }
}