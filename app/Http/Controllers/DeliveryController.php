<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveriesFormRequest;
use App\Http\Requests\DeliveryMenFormRequest;
use App\Models\Delivery;
use App\Models\DeliveryMan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{

    public function index(Request $request)
    {
        $deliveries = Delivery::all();
        $successMsg = session('msg.success');

        return view('deliveries.index')->with([
            'deliveries' => $deliveries,
            'successMsg' => $successMsg,
        ]);
    }

    public function create(Request $request)
    {
        $d_Men = DeliveryMan::all();

        return view('deliveries.create')->with([
            "deliveries_men" => $d_Men
        ]);
    }


    public function store(DeliveriesFormRequest $request)
    {
        $deliveryMenId = $request->input('delivery_men_id');
        $deliveryMenName = DeliveryMan::query('delivery_men')->where('id', "$deliveryMenId")->value('name');

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


        return to_route('deliveries.index')
            ->with('msg.success', 'Entrega adicionada com sucesso!');
    }


    public function edit(Delivery $delivery)
    {
        $update = true;

        return view('deliveries.edit')->with([
            'delivery' => $delivery,
            'update' => $update
        ]);
    }

    // REMOVER CHEGAR EM CASA
    public function update(Delivery $delivery, DeliveriesFormRequest $request)
    {
        $delivery->update([
            "title" => $request->input('title'),
            "deadline" => date('Y-m-d H:i:s', strtotime($request->input('deadline'))),
            "descript" => $request->input('descript'),
            "stats" => $request->input('stats'),
            "place" => $request->input('place'),
        ]);

        return to_route('deliveries.index')->with('msg.success', "Entrega {$delivery->id} - {$delivery->title} atualizada com sucesso!");
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return to_route('deliveries.index')
            ->with('msg.success', "Entrega {$delivery->id} - {$delivery->title} removida com sucesso!");
    }
}
