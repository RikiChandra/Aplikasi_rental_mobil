<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Daftarmobil;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Mobils = Daftarmobil::count();
        $users = User::count();
        $vendors = Vendor::count();
        $banks = Bank::count();
        $grafik = DB::select("SELECT daftarmobils.vendor_id,vendors.nama_vendor, COUNT(*) as jumlah_vendor
        FROM daftarmobils
        JOIN vendors
        ON daftarmobils.vendor_id = vendors.id
        GROUP BY daftarmobils.vendor_id,vendors.nama_vendor");

        return view('dashboard.index', compact('Mobils', 'users', 'grafik', 'vendors', 'banks'));
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
