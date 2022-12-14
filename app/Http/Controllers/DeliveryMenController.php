<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryMenFormRequest;
use App\Models\DeliveryMan;
use App\Repository\EloquentDeliveryMensRepository;
use Illuminate\Http\Request;

class DeliveryMenController extends Controller
{
    public function __construct(private EloquentDeliveryMensRepository $repository)
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DeliveryMan $d_man, Request $request)
    {
        $delivery_men = DeliveryMan::all();

        // Implementar forma de exibir a quantidade de entregas com a id do entregador
        $totalDelivey = $d_man->query()->where('delivery_men_id', '=');

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
    public function store(DeliveryMenFormRequest $request)
    {
        $this->repository->add($request);

        return to_route('deliverymens.index')
            ->with('msg.success', 'Entrega adicionada com sucesso!');
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
    public function destroy(DeliveryMan $deliveryMan)
    {
        $this->repository->delete($deliveryMan);

        return to_route('deliverymens.index')->with('msg.success', 'Entregador removido com sucesso!');
    }
}
