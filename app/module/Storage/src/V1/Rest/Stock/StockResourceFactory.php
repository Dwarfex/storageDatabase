<?php
namespace Storage\V1\Rest\Stock;

class StockResourceFactory
{
    public function __invoke($services)
    {
        return new StockResource();
    }
}
