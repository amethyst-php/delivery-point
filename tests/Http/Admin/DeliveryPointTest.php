<?php

namespace Railken\Amethyst\Tests\Http\Admin;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\DeliveryPointFaker;
use Railken\Amethyst\Tests\BaseTest;

class DeliveryPointTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = DeliveryPointFaker::class;

    /**
     * Router group resource.
     *
     * @var string
     */
    protected $group = 'admin';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'admin.delivery-point';
}
