<?php


use Reinfi\DependencyInjection\AbstractFactory\FallbackAutoWiringFactory;
use Reinfi\DependencyInjection\Factory\AutoWiringFactory;

return [
    'factories' => [
        'RedisCaches' => Application\Cache\Factory\RedisFactory::class,
    ],
    'abstract_factories' => [
        FallbackAutoWiringFactory::class,
    ],

    'invokables' => [
    ],
];
