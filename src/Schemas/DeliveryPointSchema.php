<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\AddressManager;
use Railken\Amethyst\Managers\DeliveryPointVendorManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class DeliveryPointSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('code'),
            Attributes\BelongsToAttribute::make('vendor_id')
                ->setRelationName('vendor')
                ->setRelationManager(DeliveryPointVendorManager::class)
                ->setRequired(true),
            Attributes\BelongsToAttribute::make('address_id')
                ->setRelationName('address')
                ->setRelationManager(AddressManager::class)
                ->setRequired(true),
            Attributes\TextAttribute::make('address_code'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
