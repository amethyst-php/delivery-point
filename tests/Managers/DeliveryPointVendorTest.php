<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\DeliveryPointVendorFaker;
use Railken\Amethyst\Managers\DeliveryPointVendorManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class DeliveryPointVendorTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = DeliveryPointVendorManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = DeliveryPointVendorFaker::class;
}
