<?php

namespace App\Repository;

use App\Http\Requests\DeliveriesFormRequest;
use App\Models\Delivery;

interface DeliveriesRepository
{
    public function add(DeliveriesFormRequest $request): Delivery;
}
