<?php

namespace src\model;

use Override;

class Book extends CatalogItemAbstract{

#[Override]
	protected function calculateFine(int $daysOverdue)
    {
        throw new \Exception('Not implemented');
    }
}