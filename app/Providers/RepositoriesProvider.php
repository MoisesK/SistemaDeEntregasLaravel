<?php

namespace App\Providers;

use App\Repository\DeliveriesRepository;
use App\Repository\EloquentDeliveriesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    public array $bindings = [
        DeliveriesRepository::class => EloquentDeliveriesRepository::class
    ];
}
