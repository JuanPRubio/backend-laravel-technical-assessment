<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreZipCodeSettlementRequest;
use App\Http\Requests\UpdateZipCodeSettlementRequest;
use App\Models\ZipCodeSettlement;

class ZipCodeSettlementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZipCodeSettlementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZipCodeSettlementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ZipCodeSettlement  $zipCodeSettlement
     * @return \Illuminate\Http\Response
     */
    public function show(ZipCodeSettlement $zipCodeSettlement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ZipCodeSettlement  $zipCodeSettlement
     * @return \Illuminate\Http\Response
     */
    public function edit(ZipCodeSettlement $zipCodeSettlement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZipCodeSettlementRequest  $request
     * @param  \App\Models\ZipCodeSettlement  $zipCodeSettlement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZipCodeSettlementRequest $request, ZipCodeSettlement $zipCodeSettlement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ZipCodeSettlement  $zipCodeSettlement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZipCodeSettlement $zipCodeSettlement)
    {
        //
    }
}
