<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryMenFormRequest;
use App\Models\DeliveryMan;
use Illuminate\Http\Request;

class DeliveryMenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $delivery_men = DeliveryMan::all();

        return view('delivery_mens.index')->with([
            "deliverie_mens" => $delivery_men
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery_mens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeliveryMenFormRequest $deliveryMen)
    {

        DeliveryMan::create($infoDeliveryMen = [
            'deliveries_id' => '0',
            'name' => $deliveryMen->input('name'),
            'adress' => $deliveryMen->input('adress'),
            'vehicle' => $deliveryMen->input('vehicle'),
            'age' => $deliveryMen->input('age'),
        ]);

        return to_route('deliverymens.index')
            ->with('msg.success', 'Entrega adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
