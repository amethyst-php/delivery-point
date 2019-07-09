<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\App\DeliveryPointVendorsController::class,
    'router'     => [
        'as'     => 'delivery-point-vendor.',
        'prefix' => '/delivery-point-vendors',
    ],
];
