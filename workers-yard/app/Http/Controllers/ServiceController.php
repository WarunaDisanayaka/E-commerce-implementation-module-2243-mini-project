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
<<<<<<< Updated upstream
        $id=shopname();
        $service=new service();
        $service->servicename=$request->name;
        $service->servicedescription=$request->discription;
        $service->shopid= $id;
        $service->price=$request->price;
        $service->serviceimage= $id;
=======
        $request->validate([
            'servicename' => 'required|max:255',
            'servicedescription' => 'required|max:5000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
            'price' => 'required|max:255',
            'includeservice' => 'max:2000',
            'revisions' => 'max:255',
            'diliverydate' => 'max:255',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $id = Auth::user()->id;
        $shops = DB::select('select * from shops where sellerid = ?',[$id]);
        $shopid = $shops[0]->id;

        $ser = $request->includeservice;

        $serarr = explode (",", $ser);
        $serin = json_encode($serarr);

        $service = new service();

        $service->servicename = $request->servicename;
        $service->shopid = $shopid;
        $service->servicedescription = $request->servicedescription;
        $service->serviceimage = $imageName;
        $service->price = $request->price;
        $service->includeservice = $serin;
        $service->revision = $request->revisions;
        $service->diliverydates = $request->diliverydates;
>>>>>>> Stashed changes

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
        return view('seller.showservice', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service)
    {
        return view('seller.editservice', compact('service'));
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
        $request->validate([
            'servicename' => 'required|max:255',
            'shopid'=>'required|max:255',
            'servicedescription' => 'required|max:5000',
            'image' => 'required|max:255',
            'price' => 'required|max:255',
            'includeservice' => 'max:2000',
            'revision' => 'max:255',
            'diliverydate' => 'max:255',
        ]);

        $service->update($request->all());

        return redirect()->route('shop.index')
            ->with('success','Your Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();

        return redirect()->route('shop.index')
            ->with('success','The Service deleted successfully.');
    }
}
