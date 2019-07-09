<?php

return [
    'table'      => 'amethyst_delivery_points',
    'comment'    => 'DeliveryPoint',
    'model'      => Amethyst\Models\DeliveryPoint::class,
    'schema'     => Amethyst\Schemas\DeliveryPointSchema::class,
    'repository' => Amethyst\Repositories\DeliveryPointRepository::class,
    'serializer' => Amethyst\Serializers\DeliveryPointSerializer::class,
    'validator'  => Amethyst\Validators\DeliveryPointValidator::class,
    'authorizer' => Amethyst\Authorizers\DeliveryPointAuthorizer::class,
    'faker'      => Amethyst\Fakers\DeliveryPointFaker::class,
    'manager'    => Amethyst\Managers\DeliveryPointManager::class,
];
