<?php

namespace App\Providers;

use App\Repository\DeliveriesRepository;
use App\Repository\DeliveryMensRepository;
use App\Repository\EloquentDeliveriesRepository;
use App\Repository\EloquentDeliveryMensRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public array $bindings = [
        DeliveriesRepository::class => EloquentDeliveriesRepository::class,
        DeliveryMensRepository::class => EloquentDeliveryMensRepository::class
    ];
}
