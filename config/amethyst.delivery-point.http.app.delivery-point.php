<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\App\DeliveryPointsController::class,
    'router'     => [
        'as'     => 'delivery-point.',
        'prefix' => '/delivery-points',
    ],
];
