<?php

namespace App\Repository;

use App\Http\Requests\DeliveriesFormRequest;

interface DeliveriesRepository
{
    public function add(DeliveriesFormRequest $request);
}
