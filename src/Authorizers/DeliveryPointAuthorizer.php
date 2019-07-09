<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class DeliveryPointAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'delivery-point.create',
        Tokens::PERMISSION_UPDATE => 'delivery-point.update',
        Tokens::PERMISSION_SHOW   => 'delivery-point.show',
        Tokens::PERMISSION_REMOVE => 'delivery-point.remove',
    ];
}
