<?php

namespace App\Repository;

use App\Http\Requests\DeliveryMenFormRequest;
use App\Models\DeliveryMan;
use Illuminate\Support\Facades\DB;

class EloquentDeliveryMensRepository implements DeliveryMensRepository
{
    public function add(DeliveryMenFormRequest $request)
    {

        return  DB::transaction(function () use ($request) {
            DeliveryMan::create($infoDeliveryMen = [
                'name' => $request->input('name'),
                'adress' => $request->input('adress'),
                'vehicle' => $request->input('vehicle'),
                'age' => $request->input('age'),
            ]);
        }, 5);
    }

    public function delete(DeliveryMan $deliveryMan)
    {
        return DB::transaction(function () use ($deliveryMan) {
            $deliveryMan->delete();
        });
    }
}
