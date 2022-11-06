<?php

namespace App\Http\Controllers;

use App\Models\Orderconfermation;
use App\Http\Requests\StoreOrderconfermationRequest;
use App\Http\Requests\UpdateOrderconfermationRequest;

class OrderconfermationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.serviceform');
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
     * @param  \App\Http\Requests\StoreOrderconfermationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderconfermationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orderconfermation  $orderconfermation
     * @return \Illuminate\Http\Response
     */
    public function show(Orderconfermation $orderconfermation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orderconfermation  $orderconfermation
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderconfermation $orderconfermation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderconfermationRequest  $request
     * @param  \App\Models\Orderconfermation  $orderconfermation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderconfermationRequest $request, Orderconfermation $orderconfermation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orderconfermation  $orderconfermation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderconfermation $orderconfermation)
    {
        //
    }
}
