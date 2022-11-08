<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveriesFormRequest;
use App\Models\Delivery;
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

    public function create()
    {
        return view('deliveries.create');
    }


    public function store(DeliveriesFormRequest $request)
    {

        Delivery::create($infoDelivery = [
            "title" => $request->input('title'),
            "deadline" => date('Y-m-d H:i:s', strtotime($request->input('deadline'))),
            "descript" => $request->input('descript'),
            "stats" => "Pendente",
            "place" => $request->input('place')
        ]);


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


    public function update(Delivery $delivery, DeliveriesFormRequest $request)
    {
        $delivery->update([
            "title" => $request->input('title'),
            "deadline" => date('Y-m-d H:i:s', strtotime($request->input('deadline'))),
            "descript" => $request->input('descript'),
            "stats" => $request->input('stats'),
            "place" => $request->input('place')
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
