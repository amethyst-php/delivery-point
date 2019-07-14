<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\DeliveryPoint newEntity()
 * @method \Amethyst\Schemas\DeliveryPointSchema getSchema()
 * @method \Amethyst\Repositories\DeliveryPointRepository getRepository()
 * @method \Amethyst\Serializers\DeliveryPointSerializer getSerializer()
 * @method \Amethyst\Validators\DeliveryPointValidator getValidator()
 * @method \Amethyst\Authorizers\DeliveryPointAuthorizer getAuthorizer()
 */
class DeliveryPointManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.delivery-point.data.delivery-point';
}
