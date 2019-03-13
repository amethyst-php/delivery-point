<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\DeliveryPointFaker;
use Railken\Amethyst\Managers\DeliveryPointManager;
use Railken\Amethyst\Tests\BaseTest;
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
