<?php

namespace Railken\Amethyst\Http\Controllers\App;

use Railken\Amethyst\Api\Http\Controllers\RestManagerController;
use Railken\Amethyst\Api\Http\Controllers\Traits as RestTraits;
use Railken\Amethyst\Managers\DeliveryPointManager;

class DeliveryPointsController extends RestManagerController
{
    use RestTraits\RestIndexTrait;
    use RestTraits\RestShowTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = DeliveryPointManager::class;
}
