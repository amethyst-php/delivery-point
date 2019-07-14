<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\DeliveryPointVendor newEntity()
 * @method \Amethyst\Schemas\DeliveryPointVendorSchema getSchema()
 * @method \Amethyst\Repositories\DeliveryPointVendorRepository getRepository()
 * @method \Amethyst\Serializers\DeliveryPointVendorSerializer getSerializer()
 * @method \Amethyst\Validators\DeliveryPointVendorValidator getValidator()
 * @method \Amethyst\Authorizers\DeliveryPointVendorAuthorizer getAuthorizer()
 */
class DeliveryPointVendorManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.delivery-point.data.delivery-point-vendor';
}
