<?php

namespace Railken\Amethyst\Managers;

use Railken\Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

class DeliveryPointVendorManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.delivery-point.data.delivery-point-vendor';
}
