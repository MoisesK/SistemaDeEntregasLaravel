<?php

namespace App\Repository;

use App\Http\Requests\DeliveriesFormRequest;
use App\Models\Delivery;
use App\Models\DeliveryMan;
use App\Repository\DeliveriesRepository;
use Illuminate\Support\Facades\DB;

class EloquentDeliveriesRepository implements DeliveriesRepository
{
    public function add(DeliveriesFormRequest $request): Delivery
    {
        $deliveryMenId = $request->input('delivery_men_id');
        $deliveryMenName = DeliveryMan::query('delivery_men')->where('id', "$deliveryMenId")->value('name');

        return  DB::transaction(function () use ($request, $deliveryMenId, $deliveryMenName) {
            Delivery::create(
                [
                    "title" => $request->input('title'),
                    "deadline" => date('Y-m-d H:i:s', strtotime($request->input('deadline'))),
                    "descript" => $request->input('descript'),
                    "stats" => "Pendente",
                    "place" => $request->input('place'),
                    "delivery_men_id" => $request->input('delivery_men_id'),
                    "delivery_men" => $deliveryMenName
                ]
            );
        }, 5);
    }
}
