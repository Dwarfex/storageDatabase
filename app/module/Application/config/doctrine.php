<?php

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [


    'driver' => [
        // defines an annotation driver with two paths, and names it `my_annotation_driver`
        'app_driver' => [
            'class' => AnnotationDriver::class,
            'cache' => 'array',
            'paths' => [
                __DIR__ . '/../src/Entity/',
            ],
        ],

        // default metadata driver, aggregates all other drivers into a single one.
        // Override `orm_default` only if you know what you're doing
        'orm_default' => [
            'drivers' => [
                // register `techfile_driver` for any entity under namespace `Applicaiton`
                'Application' => 'app_driver',
            ],
        ],
    ],

];
