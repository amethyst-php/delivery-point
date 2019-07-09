<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\DeliveryPointFaker;
use Amethyst\Managers\DeliveryPointManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class DeliveryPointTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = DeliveryPointManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = DeliveryPointFaker::class;
}
