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
                'metadata_cache'  => 'array',
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
                'instance'  => 'RedisCache',
            ],
        ],

        'migrations_configuration' => [
            'orm_default' => [
                'table_storage' => [
                    'table_name' => 'doctrine_migration_versions',
                    'version_column_name' => 'version',
                    'version_column_length' => 1024,
                    'executed_at_column_name' => 'executed_at',
                    'execution_time_column_name' => 'execution_time',
                ],
                'all_or_nothing' => true,
                'check_database_platform' => true,
                'organize_migrations' => 'none',
            ],
        ],

    ],


];
