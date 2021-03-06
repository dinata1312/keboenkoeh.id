<?php

namespace App\Http\Controllers;

use App\Models\GardenPlant;
use App\Models\Partner;
use App\Models\ProductSales;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Selling;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sells = ProductSales::orderByDesc('updated_at')->get();

        return view('owner.index-penjualan')->with('datas', $sells);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $partner = Partner::all();
        
        return view('owner.add-penjualan')->with(['partners' => $partner ]);
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
        $garden_id  = $request->garden_id;
        $plant_id   = $request->plantType;
        $amount     = $request->amount;
        $price      = $request->price;
        $partner_id = $request->partner;
        // $created    = DB::raw('CURRENT_TIMESTAMP');

        $insertData = ProductSales::create([
            'plant_id'  => $plant_id,
            'amount'    => $amount,
            'price'     => $price,
            'partner_id'=> $partner_id,
        ]);
        
        if ($insertData){
            Session::put('alert', 'success');
            Session::put('alert-message', 'Data berhasil diperbarui');
        }else{
            Session::put('alert', 'failure');
            Session::put('alert-message', 'Mohon maaf. Data gagal diperbarui');
        }
        return redirect('penjualan');
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
        $SellingData = ProductSales::where('id', $id)->first();
        return view('owner.detail-penjualan')->with('data', $SellingData);
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
        $SellingData = ProductSales::where('id', $id)->first();
        return view('owner.edit-penjualan')->with('data', $SellingData);
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
        $id         = $id;
        $plant_id   = $request->plantType;
        $amount     = $request->amount;
        $price      = $request->price;
        $harvest    = $request->harvest;

        $insertData  = ProductSales::where('id', $id)->update([
                                        'amount'    => $amount,
                                        'price'     => $price,
                                        'updated_at'=> DB::raw('CURRENT_TIMESTAMP'),
                                    ]);
        
        if ($insertData){
            Session::put('alert', 'success');
            Session::put('alert-message', 'Data berhasil diperbarui');
        }else{
            Session::put('alert', 'failure');
            Session::put('alert-message', 'Mohon maaf. Data gagal diperbarui');
        }
        return redirect('penjualan')->with('success', 'Data berhasil diperbarui !');
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
