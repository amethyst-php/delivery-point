<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\DeliveryPointsController::class,
    'router'     => [
        'as'     => 'delivery-point.',
        'prefix' => '/delivery-points',
    ],
];
