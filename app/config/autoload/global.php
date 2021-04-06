<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'doctrine' => [
        'migrations_configuration' => [
            'orm_default' => [
                'directory' => 'data/Migrations/',
                'name'      => 'Doctrine Database Migrations',
                'namespace' => 'Migrations',
                'table'     => 'migrations',
            ],
        ],
    ],
    'reinfi.dependencyInjection' => [
        'cache'         => Memory::class,
        'cache_options' => [],
        'cache_plugins' => [],
    ],
    'session_config' => [
        // session will expire after 8 hours
        'cookie_lifetime' => 60 * 60 * 8,
        // Session data will be stored on server maximum for 30 days.
        'gc_maxlifetime' => 60 * 60 * 24 * 31
    ],
    'session_manager' => [
        'validators' => [
            RemoteAddr::class,
            HttpUserAgent::class
        ]
    ],
    'session_storage' => [
        'type' => SessionArrayStorage::class
    ],
];
