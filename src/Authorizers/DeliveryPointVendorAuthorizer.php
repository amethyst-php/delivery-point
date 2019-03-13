<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class DeliveryPointVendorAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'delivery-point-vendor.create',
        Tokens::PERMISSION_UPDATE => 'delivery-point-vendor.update',
        Tokens::PERMISSION_SHOW   => 'delivery-point-vendor.show',
        Tokens::PERMISSION_REMOVE => 'delivery-point-vendor.remove',
    ];
}
