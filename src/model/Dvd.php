<?php

namespace src\model;

use Override;

class Dvd extends CatalogItemAbstract 
{
    #[Override]
    protected function calculateFine(int $daysOverdue)
    {
        throw new \Exception('Not implemented');
    }
}