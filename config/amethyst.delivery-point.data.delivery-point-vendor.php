<?php

return [
    'table'      => 'amethyst_delivery_point_vendors',
    'comment'    => 'DeliveryPointVendor',
    'model'      => Amethyst\Models\DeliveryPointVendor::class,
    'schema'     => Amethyst\Schemas\DeliveryPointVendorSchema::class,
    'repository' => Amethyst\Repositories\DeliveryPointVendorRepository::class,
    'serializer' => Amethyst\Serializers\DeliveryPointVendorSerializer::class,
    'validator'  => Amethyst\Validators\DeliveryPointVendorValidator::class,
    'authorizer' => Amethyst\Authorizers\DeliveryPointVendorAuthorizer::class,
    'faker'      => Amethyst\Fakers\DeliveryPointVendorFaker::class,
    'manager'    => Amethyst\Managers\DeliveryPointVendorManager::class,
];
