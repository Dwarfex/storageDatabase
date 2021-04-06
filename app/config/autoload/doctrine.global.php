<?php


use Doctrine\DBAL\Driver\PDO\MySQL\Driver;

return [
    'doctrine' => [
        'connection'    => [
            // default connection name
            'orm_default' => [
                'driverClass' => Driver::class,
                'params'      => [
                    'host'     => 'docker-mysql',
                    'port'     => '3306',
                    'user'     => 'app',
                    'password' => 'app',
                    'dbname'   => 'app',
                ],
            ],
        ],
        'configuration' => [
            'orm_default' => [
                'metadata_cache'  => 'redis',
                // DQL queries parsing cache instance to use. The retrieved service
                // name will be `doctrine.cache.$thisSetting`
                'query_cache'     => 'redis',
                // ResultSet cache to use.  The retrieved service name will be
                // `doctrine.cache.$thisSetting`
                'result_cache'    => 'redis',
                // Hydration cache to use.  The retrieved service name will be
                // `doctrine.cache.$thisSetting`
                'hydration_cache' => 'redis',
            ],
        ],
        'cache'         => [
            'redis' => [
                'namespace' => 'Db_Doctrine_Development',
                'instance'  => 'RedisCaches',
            ],
        ],
    ],

    'redis' => [
        'port' => 6379,
        'host' => 'redis',
    ],
];
