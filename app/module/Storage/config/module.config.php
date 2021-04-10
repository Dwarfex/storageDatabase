<?php
return [
    'api-tools-versioning' => [
        'default_version' => 1,
        'uri' => [
            0 => 'storage.rest.products',
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Storage\V1\Rest\Products\ProductsResource::class => \Storage\V1\Rest\Products\ProductsResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'storage.rest.products' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/products[/:products_id]',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rest\\Products\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-rest' => [
        'Storage\\V1\\Rest\\Products\\Controller' => [
            'listener' => \Storage\V1\Rest\Products\ProductsResource::class,
            'route_name' => 'storage.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Storage\V1\Rest\Products\ProductsEntity::class,
            'collection_class' => \Storage\V1\Rest\Products\ProductsCollection::class,
            'service_name' => 'Products',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Storage\\V1\\Rest\\Products\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Storage\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Storage\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Storage\V1\Rest\Products\ProductsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Storage\V1\Rest\Products\ProductsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ],
        ],
    ],
];
