<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\DeliveryPointsController::class,
    'router'     => [
        'as'     => 'delivery-point.',
        'prefix' => '/delivery-points',
    ],
];
