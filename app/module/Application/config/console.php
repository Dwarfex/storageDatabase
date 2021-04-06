<?php

use Application\Controller\ConsoleController;

return [
    'router' => [
        'routes' => [
            'addUser' => [
                'options' => [
                    'route' => 'addUser <userName>',
                    'defaults' => [
                        'controller' => ConsoleController::class,
                        'action' => 'addUser',
                    ],
                ],
            ],
        ],
    ],
];
