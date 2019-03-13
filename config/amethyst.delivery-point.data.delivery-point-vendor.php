<?php

return [
    'table'      => 'amethyst_delivery_point_vendors',
    'comment'    => 'DeliveryPointVendor',
    'model'      => Railken\Amethyst\Models\DeliveryPointVendor::class,
    'schema'     => Railken\Amethyst\Schemas\DeliveryPointVendorSchema::class,
    'repository' => Railken\Amethyst\Repositories\DeliveryPointVendorRepository::class,
    'serializer' => Railken\Amethyst\Serializers\DeliveryPointVendorSerializer::class,
    'validator'  => Railken\Amethyst\Validators\DeliveryPointVendorValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\DeliveryPointVendorAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\DeliveryPointVendorFaker::class,
    'manager'    => Railken\Amethyst\Managers\DeliveryPointVendorManager::class,
];
