<?php

namespace Railken\Amethyst\Tests\Http\App;

use Railken\Amethyst\Api\Support\Testing\TestableBaseTrait;
use Railken\Amethyst\Fakers\DeliveryPointVendorFaker;
use Railken\Amethyst\Managers\DeliveryPointVendorManager;
use Railken\Amethyst\Tests\BaseTest;

class DeliveryPointVendorTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = DeliveryPointVendorFaker::class;

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
    protected $route = 'app.delivery-point-vendor';

    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        (new DeliveryPointVendorManager())->createOrFail(DeliveryPointVendorFaker::make()->parameters()->toArray());
    }
}
