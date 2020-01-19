<?php

namespace Amethyst\Http\Controllers\App;

use Amethyst\Core\Http\Controllers\RestManagerController;
use Amethyst\Core\Http\Controllers\Traits as RestTraits;
use Amethyst\Managers\DeliveryPointVendorManager;

class DeliveryPointVendorsController extends RestManagerController
{
    use RestTraits\RestIndexTrait;
    use RestTraits\RestShowTrait;

    /**
     * The class of the manager.
     *
     * @var string
     */
    public $class = DeliveryPointVendorManager::class;
}
