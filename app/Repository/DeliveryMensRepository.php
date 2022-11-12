<?php

namespace App\Repository;

use App\Http\Requests\DeliveryMenFormRequest;

interface DeliveryMensRepository
{
    public function add(DeliveryMenFormRequest $request);
}
