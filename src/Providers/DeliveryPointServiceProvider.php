<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class DeliveryPointServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\AddressServiceProvider::class);

        app('amethyst')->pushMorphRelation('opening-hour', 'target', 'delivery-point');
    }
}
