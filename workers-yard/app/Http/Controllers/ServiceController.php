<?php

namespace App\Http\Controllers;

use App\Models\service;

use App\Models\Request;
use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
    }


    public function shopname(){
         //  $id = Auth::user()->id;
         $id=1;
         $shops = DB::select('select shopname from shops where sellerid = ?', [$id]);

        return $shops;
    }

    /**
    
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.addservice');
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreserviceRequest $request)
    {
        $id=shopname();
        $service=new service();
        $service->servicename=$request->name;
        $service->servicedescription=$request->discription;
        $service->shopid= $id;
        $service->price=$request->price;
        $service->serviceimage= $id;

        $service->save();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateserviceRequest  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateserviceRequest $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        //
    }
}
