<?php

namespace Railken\Amethyst\Tests\Http\App;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\DeliveryPointFaker;
use Railken\Amethyst\Managers\DeliveryPointManager;
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
    protected $group = 'app';

    /**
     * Route name.
     *
     * @var string
     */
    protected $route = 'app.delivery-point';

    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        (new DeliveryPointManager())->createOrFail(DeliveryPointFaker::make()->parameters()->toArray());
    }
}
