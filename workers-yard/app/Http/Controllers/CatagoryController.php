<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Http\Requests\StoreCatagoryRequest;
use App\Http\Requests\UpdateCatagoryRequest;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagories = DB::select('select * from catagories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createcatagory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatagoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatagoryRequest $request)
    {
        $catagory = new Catagory();

        $catagory->catagory = $request->catagory;

        $catagory->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatagoryRequest  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatagoryRequest $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $catagory)
    {
        //
    }
}
