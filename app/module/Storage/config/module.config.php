<?php
return [
    'api-tools-versioning' => [
        'default_version' => 1,
        'uri' => [
            0 => 'storage.rest.products',
            1 => 'storage.rest.stock',
            2 => 'storage.rest.item-category',
            3 => 'storage.rest.storage',
            4 => 'storage.rest.item',
            5 => 'storage.rest.item-definition',
            7 => 'storage.rpc.add-product',
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Storage\V1\Rest\Products\ProductsResource::class => \Storage\V1\Rest\Products\ProductsResourceFactory::class,
            \Storage\V1\Rest\Stock\StockResource::class => \Storage\V1\Rest\Stock\StockResourceFactory::class,
            \Storage\V1\Rest\ItemCategory\ItemCategoryResource::class => \Storage\V1\Rest\ItemCategory\ItemCategoryResourceFactory::class,
            \Storage\V1\Rest\Storage\StorageResource::class => \Storage\V1\Rest\Storage\StorageResourceFactory::class,
            \Storage\V1\Rest\Item\ItemResource::class => \Storage\V1\Rest\Item\ItemResourceFactory::class,
            \Storage\V1\Rest\ItemDefinition\ItemDefinitionResource::class => \Storage\V1\Rest\ItemDefinition\ItemDefinitionResourceFactory::class,
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
            'storage.rest.stock' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/stock[/:stock_id]',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rest\\Stock\\Controller',
                    ],
                ],
            ],
            'storage.rest.item-category' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/item-category[/:item_category_id]',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rest\\ItemCategory\\Controller',
                    ],
                ],
            ],
            'storage.rest.storage' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/storage[/:storage_id]',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rest\\Storage\\Controller',
                    ],
                ],
            ],
            'storage.rest.item' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/item[/:item_id]',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rest\\Item\\Controller',
                    ],
                ],
            ],
            'storage.rest.item-definition' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/item-definition[/:item_definition_id]',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rest\\ItemDefinition\\Controller',
                    ],
                ],
            ],
            'storage.rpc.add-product' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/add/:number',
                    'defaults' => [
                        'controller' => 'Storage\\V1\\Rpc\\AddProduct\\Controller',
                        'action' => 'addProduct',
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
        'Storage\\V1\\Rest\\Stock\\Controller' => [
            'listener' => \Storage\V1\Rest\Stock\StockResource::class,
            'route_name' => 'storage.rest.stock',
            'route_identifier_name' => 'stock_id',
            'collection_name' => 'stock',
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
            'entity_class' => \Storage\V1\Rest\Stock\StockEntity::class,
            'collection_class' => \Storage\V1\Rest\Stock\StockCollection::class,
            'service_name' => 'Stock',
        ],
        'Storage\\V1\\Rest\\ItemCategory\\Controller' => [
            'listener' => \Storage\V1\Rest\ItemCategory\ItemCategoryResource::class,
            'route_name' => 'storage.rest.item-category',
            'route_identifier_name' => 'item_category_id',
            'collection_name' => 'item_category',
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
            'entity_class' => \Storage\V1\Rest\ItemCategory\ItemCategoryEntity::class,
            'collection_class' => \Storage\V1\Rest\ItemCategory\ItemCategoryCollection::class,
            'service_name' => 'ItemCategory',
        ],
        'Storage\\V1\\Rest\\Storage\\Controller' => [
            'listener' => \Storage\V1\Rest\Storage\StorageResource::class,
            'route_name' => 'storage.rest.storage',
            'route_identifier_name' => 'storage_id',
            'collection_name' => 'storage',
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
            'entity_class' => \Storage\V1\Rest\Storage\StorageEntity::class,
            'collection_class' => \Storage\V1\Rest\Storage\StorageCollection::class,
            'service_name' => 'Storage',
        ],
        'Storage\\V1\\Rest\\Item\\Controller' => [
            'listener' => \Storage\V1\Rest\Item\ItemResource::class,
            'route_name' => 'storage.rest.item',
            'route_identifier_name' => 'item_id',
            'collection_name' => 'item',
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
            'entity_class' => \Storage\V1\Rest\Item\ItemEntity::class,
            'collection_class' => \Storage\V1\Rest\Item\ItemCollection::class,
            'service_name' => 'Item',
        ],
        'Storage\\V1\\Rest\\ItemDefinition\\Controller' => [
            'listener' => \Storage\V1\Rest\ItemDefinition\ItemDefinitionResource::class,
            'route_name' => 'storage.rest.item-definition',
            'route_identifier_name' => 'item_definition_id',
            'collection_name' => 'item_definition',
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
            'entity_class' => \Storage\V1\Rest\ItemDefinition\ItemDefinitionEntity::class,
            'collection_class' => \Storage\V1\Rest\ItemDefinition\ItemDefinitionCollection::class,
            'service_name' => 'ItemDefinition',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Storage\\V1\\Rest\\Products\\Controller' => 'HalJson',
            'Storage\\V1\\Rest\\Stock\\Controller' => 'HalJson',
            'Storage\\V1\\Rest\\ItemCategory\\Controller' => 'HalJson',
            'Storage\\V1\\Rest\\Storage\\Controller' => 'HalJson',
            'Storage\\V1\\Rest\\Item\\Controller' => 'HalJson',
            'Storage\\V1\\Rest\\ItemDefinition\\Controller' => 'HalJson',
            'Storage\\V1\\Rpc\\AddProduct\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Storage\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Storage\\V1\\Rest\\Stock\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Storage\\V1\\Rest\\ItemCategory\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Storage\\V1\\Rest\\Storage\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Storage\\V1\\Rest\\Item\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Storage\\V1\\Rest\\ItemDefinition\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Storage\\V1\\Rpc\\AddProduct\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Storage\\V1\\Rest\\Products\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
            'Storage\\V1\\Rest\\Stock\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
            'Storage\\V1\\Rest\\ItemCategory\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
            'Storage\\V1\\Rest\\Storage\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
            'Storage\\V1\\Rest\\Item\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
            'Storage\\V1\\Rest\\ItemDefinition\\Controller' => [
                0 => 'application/vnd.storage.v1+json',
                1 => 'application/json',
            ],
            'Storage\\V1\\Rpc\\AddProduct\\Controller' => [
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
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \Storage\V1\Rest\Products\ProductsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ],
            \Storage\V1\Rest\Stock\StockEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.stock',
                'route_identifier_name' => 'stock_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \Storage\V1\Rest\Stock\StockCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.stock',
                'route_identifier_name' => 'stock_id',
                'is_collection' => true,
            ],
            \Storage\V1\Rest\ItemCategory\ItemCategoryEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.item-category',
                'route_identifier_name' => 'item_category_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \Storage\V1\Rest\ItemCategory\ItemCategoryCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.item-category',
                'route_identifier_name' => 'item_category_id',
                'is_collection' => true,
            ],
            \Storage\V1\Rest\Storage\StorageEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.storage',
                'route_identifier_name' => 'storage_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \Storage\V1\Rest\Storage\StorageCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.storage',
                'route_identifier_name' => 'storage_id',
                'is_collection' => true,
            ],
            \Storage\V1\Rest\Item\ItemEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.item',
                'route_identifier_name' => 'item_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \Storage\V1\Rest\Item\ItemCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.item',
                'route_identifier_name' => 'item_id',
                'is_collection' => true,
            ],
            \Storage\V1\Rest\ItemDefinition\ItemDefinitionEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.item-definition',
                'route_identifier_name' => 'item_definition_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \Storage\V1\Rest\ItemDefinition\ItemDefinitionCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'storage.rest.item-definition',
                'route_identifier_name' => 'item_definition_id',
                'is_collection' => true,
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            'Storage\\V1\\Rpc\\AddProduct\\Controller' => \Storage\V1\Rpc\AddProduct\AddProductControllerFactory::class,
        ],
    ],
    'api-tools-rpc' => [
        'Storage\\V1\\Rpc\\AddProduct\\Controller' => [
            'service_name' => 'addProduct',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'storage.rpc.add-product',
        ],
    ],
    'api-tools-content-validation' => [],
    'input_filter_specs' => [
        'Storage\\V1\\Rpc\\AddProductByEAN\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ean',
                'field_type' => 'string',
                'description' => 'The EAN for the Product to find and add',
                'error_message' => 'EAN invalid or missing.',
            ],
        ],
    ],

    'doctrine' => [
        'driver'                   => [
            'storage_driver' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/V1/Rest/Item/',
                    __DIR__ . '/../src/V1/Rest/ItemCategory/',
                    __DIR__ . '/../src/V1/Rest/ItemDefinition/',
                    __DIR__ . '/../src/V1/Rest/Products/',
                    __DIR__ . '/../src/V1/Rest/Stock/',
                    __DIR__ . '/../src/V1/Rest/Storage/',
                ],
            ],

            'orm_default' => [
                'drivers' => [
                    'Storage' => 'storage_driver',
                ],
            ],
        ],

        'migrations_configuration' => [
            'orm_default' => [
                'migrations_paths' => ['Storage' => getcwd() . '/data/migrations/'],
            ],
        ],
    ]
];
