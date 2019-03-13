<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class DeliveryPointFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('code', sha1(microtime()));
        $bag->set('vendor', DeliveryPointVendorFaker::make()->parameters()->toArray());
        $bag->set('address', AddressFaker::make()->parameters()->toArray());

        return $bag;
    }
}
