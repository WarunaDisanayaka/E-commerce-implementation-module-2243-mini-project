<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $shop = DB::select('select * from shops where sellerid = ?', [$id]);
        $shopid = $shop[0]->id;

        //$orders = DB::select('select * from orders where sid = ? ORDER BY id DESC',[$shopid]);

        $orders = DB::table('orders')
                    ->join('services', 'orders.serviceid', '=', 'services.id')
                    ->join('users', 'orders.userid', '=', 'users.id')
                    ->select('users.*', 'services.*', 'orders.*')
                    ->where('sid',$shopid)
                    ->orderByDesc('orders.id')
                    ->get();

        $ocom = DB::select('select * from orderconfermations');

        return view('seller.order', compact('orders','ocom'));
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $serviceid = $request->serviceid;
        $shops = DB::select('select * from services where id = ?',[$serviceid]);
        $shopid = $shops[0]->shopid;

        $order = new Order();

        $order->serviceid = $serviceid;
        $order->userid = Auth::user()->id;
        $order->orderdescription = $request->text;
        $order->date = $request->date;
        $order->time = $request->time;
        $order->sid = $shopid;

        $order->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $ordersa = DB::table('orders')
                    ->join('services', 'orders.serviceid', '=', 'services.id')
                    ->join('users', 'orders.userid', '=', 'users.id')
                    ->select('users.*', 'services.*', 'orders.*')
                    ->where('orders.id',$order->id)
                    ->limit(1)
                    ->get();

        $orders = $ordersa[0];

        $ocom = DB::select('select * from orderconfermations');

        return view('seller.showorder',compact('orders','ocom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
