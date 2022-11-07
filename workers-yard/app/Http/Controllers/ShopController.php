<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Models\Catagory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $shops = DB::select('select * from shops where sellerid = ?', [$id]);
        $sid = $shops[0]->id;
        $service = DB::select('select * from services where shopid = ?',[$sid]);
        $shopcount = DB::table('shops')->count();
        return view('seller.shop', compact('shops','shopcount','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagory = DB::select('select * from catagories');
        return view('seller.createshop', compact('catagory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $request)
    {
        $request->validate([
            'sname' => 'required|max:255',
            'scatagory' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:204800',
            'sdis' => 'required|max:5000'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $seller = Auth::user()->id;

        $shop = new Shop();
        $shop->shopname = $request->sname;
        $shop->shopcatagory = $request->scatagory;
        $shop->bannerimage = $imageName;
        $shop->shopdescription = $request->sdis;
        $shop->sellerid = $seller;
        $shop->save();

        return redirect()->route('shop.index')
            ->with('success','Your shop created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        $catagory = Catagory::all();
        return view('seller.editshop', compact('shop','catagory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopRequest  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        $request->validate([
            'shopname' => 'required|max:255',
            'shopcatagory' => 'required|max:255',
            'shopdescription' => 'required|max:5000',
            'sellerid' => 'required|max:255'
        ]);

        $shop->update($request->all());
        return redirect()->route('shop.index')
            ->with('success','Your shop updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shop.index')
            ->with('success','Your shop Deleted successfully.');
    }
}
