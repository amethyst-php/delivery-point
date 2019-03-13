<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\App\DeliveryPointVendorsController::class,
    'router'     => [
        'as'     => 'delivery-point-vendor.',
        'prefix' => '/delivery-point-vendors',
    ],
];
