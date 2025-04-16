<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseRentRequest;
use App\Http\Requests\UpdateHouseRentRequest;
use App\Models\HouseRent;

class HouseRentController extends Controller
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
     * @param  \App\Http\Requests\StoreHouseRentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHouseRentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HouseRent  $houseRent
     * @return \Illuminate\Http\Response
     */
    public function show(HouseRent $houseRent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HouseRent  $houseRent
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseRent $houseRent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHouseRentRequest  $request
     * @param  \App\Models\HouseRent  $houseRent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseRentRequest $request, HouseRent $houseRent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HouseRent  $houseRent
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseRent $houseRent)
    {
        //
    }
}
