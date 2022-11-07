<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $deliveries = Delivery::all();
        $successMsg = session('msg.success');

        return view('deliveries.index')->with([
            'deliveries' => $deliveries,
            'successMsg' => $successMsg,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('deliveries.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return to_route('deliveries.index')
        ->with('msg.success', "Entrega {$delivery->id} - {$delivery->title} removida com sucesso!");
    }
}
