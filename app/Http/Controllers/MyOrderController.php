<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Daftarmobil;
use App\Models\myOrder;
use Illuminate\Http\Request;

class MyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $myorder = myOrder::all();
        return view('order.data', [
            "myorder" => $myorder,
            'bank' => Bank::all()
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'denda' => 'required',
            'amount' => 'required',
            'lease_date' => 'required',
            'return_date' => 'required',
            'bank_id' => 'required'
        ]);

        myOrder::create($validatedData);
        return redirect('order.data')->with('success', 'Transaksi Berhasil');
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

        $orders = Daftarmobil::all();
        $order = $orders->find($id);
        $bank = Bank::all();
        // $order = Daftarmobil::find($id)->get()->first();
        return view('order.index', [
            'order' => $order,
            'bank' => $bank
        ]);
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
