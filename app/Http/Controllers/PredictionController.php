<?php

namespace App\Http\Controllers;

use App\Models\PlantType;
use App\Models\ProductSales;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PredictionController extends Controller
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
        $year  = intval(date('Y'));
        $month = intval(date('m'));
        $lastmonth = intval($month - 1);
        $lastyear  = intval(date('Y'));

        if($month == 1)
        {
            $lastmonth = 12;
            $lastyear  = $year - 1;
        }

        $no = 0;
        $count_plant_id = PlantType::all();

        $averages = [];
        while($no < 3)
        {
            $targetDate1 = Carbon::now()->year($lastyear)->month($lastmonth);

            foreach($count_plant_id as $planttype)
            {
                $data1 = ProductSales::whereYear('created_at', '=', $targetDate1)
                ->whereMonth('created_at', '=', $targetDate1)->where('plant_id', intval($planttype->id) )
                ->get();
                $getAverage = 0;
                $price = [];
                if($data1->isEmpty())
                {
                    continue;
                }else
                {
                    foreach($data1 as $sells)
                    {
                        // mendapatkan harga perkilo
                        $perkg = $sells->price / $sells->amount;
                        array_push($price, $perkg);
                    }
                    $getAverage = array_sum($price) / count($price); // mendapatkan rata-rata
                    array_push($averages, [$planttype->id, $lastmonth, $getAverage]);
                }
            }

            $lastmonth = $lastmonth - 1;
            if($lastmonth == 1)
            {
                $lastmonth = 12;
                $lastyear  = $year - 1;
            }
            $no++;
        }

        return view('owner.index-prediksi')->with('averages', $averages);
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
