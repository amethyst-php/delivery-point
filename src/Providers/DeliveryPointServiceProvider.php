<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class DeliveryPointServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\AddressServiceProvider::class);
        $this->app->register(\Amethyst\Providers\OpeningHourServiceProvider::class);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        app('amethyst')->pushMorphRelation('opening-hour', 'target', 'delivery-point');
    }
}
