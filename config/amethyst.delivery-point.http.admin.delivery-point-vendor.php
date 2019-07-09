<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\DeliveryPointVendorsController::class,
    'router'     => [
        'as'     => 'delivery-point-vendor.',
        'prefix' => '/delivery-point-vendors',
    ],
];
