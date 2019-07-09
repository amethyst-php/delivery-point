<?php

namespace Amethyst\Tests\Http\App;

use Amethyst\Api\Support\Testing\TestableBaseTrait;
use Amethyst\Fakers\DeliveryPointFaker;
use Amethyst\Managers\DeliveryPointManager;
use Amethyst\Tests\BaseTest;

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
    public function setUp(): void
    {
        parent::setUp();

        (new DeliveryPointManager())->createOrFail(DeliveryPointFaker::make()->parameters()->toArray());
    }
}
