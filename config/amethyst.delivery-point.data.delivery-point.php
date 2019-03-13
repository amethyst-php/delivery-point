<?php

return [
    'table'      => 'amethyst_delivery_points',
    'comment'    => 'DeliveryPoint',
    'model'      => Railken\Amethyst\Models\DeliveryPoint::class,
    'schema'     => Railken\Amethyst\Schemas\DeliveryPointSchema::class,
    'repository' => Railken\Amethyst\Repositories\DeliveryPointRepository::class,
    'serializer' => Railken\Amethyst\Serializers\DeliveryPointSerializer::class,
    'validator'  => Railken\Amethyst\Validators\DeliveryPointValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\DeliveryPointAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\DeliveryPointFaker::class,
    'manager'    => Railken\Amethyst\Managers\DeliveryPointManager::class,
];
