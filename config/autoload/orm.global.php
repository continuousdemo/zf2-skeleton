<?php
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'user' =>'root',
                    'password' => '',
                    'dbname' => 'skeleton'
                ],
            ]
        ],
        'migrations_configuration' => [
            'orm_default' => [
                'directory' => 'data/orm/migrations',
                'name' => 'Skeleton',
                'namespace' => 'DoctrineMigrations',
                'table' => 'doctrine_migration_versions',
            ],
        ],
    ],
];