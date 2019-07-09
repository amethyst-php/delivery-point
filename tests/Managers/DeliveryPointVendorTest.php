<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\DeliveryPointVendorFaker;
use Amethyst\Managers\DeliveryPointVendorManager;
use Amethyst\Tests\BaseTest;
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
