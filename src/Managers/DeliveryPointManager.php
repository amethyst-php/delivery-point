<?php

namespace Railken\Amethyst\Managers;

use Railken\Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

class DeliveryPointManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.delivery-point.data.delivery-point';
}
