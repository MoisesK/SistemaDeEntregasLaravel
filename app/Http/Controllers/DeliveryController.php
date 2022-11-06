<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = [
            'teste',
            'teste2',
            'teste3'
        ];

        return view('deliveries.index')->with([
            'deliveries' => $deliveries
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
        $newDelivery = [
            "title" => $request->input('title'),
            "deadline" => date('Y-m-d H:i:s', strtotime($request->input('deadline'))),
            "descript" => $request->input('descript'),
            "stats" => "Pendente",
            "place" => $request->input('place')
        ];

        if (DB::insert('INSERT INTO deliveries (title,deadline,descript,stats,place) VALUES (?,?,?,?,?)', [
            $newDelivery["title"],
            $newDelivery["deadline"],
            $newDelivery["descript"],
            $newDelivery["stats"],
            $newDelivery["place"]
        ])) {
            return redirect("/");
        } else {
            return "ERRO";
        }
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
