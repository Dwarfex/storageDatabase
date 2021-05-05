<?php
namespace Storage\V1\Rest\Storage;

class StorageResourceFactory
{
    public function __invoke($services)
    {
        return new StorageResource();
    }
}
