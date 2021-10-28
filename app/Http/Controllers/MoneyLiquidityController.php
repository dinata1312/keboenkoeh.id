<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MoneyLiquidity;
use App\Models\Category;
use App\Models\Partner;

class MoneyLiquidityController extends Controller
{
    //
    public function index()
    {
        //
        $data = MoneyLiquidity::all();
        // dd($data);
        return view('owner.index-laporan-keuangan')->with('datas', $data);
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
        $data = MoneyLiquidity::where('id', $id)->first();
        
        return view('owner.detail-keuangan')->with('data', $data);
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
        $data = MoneyLiquidity::where('id', $id)->first();
        
        return view('owner.edit-keuangan')->with('data', $data);
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
        $name           = $request->title;
        $category_id    = $request->category;
        $partner_id     = $request->partner;
        $notes          = $request->detail;
        $type           = $request->type;
        $amount         = $request->amount;
        $price          = $request->price;
        $image          = $request->image;
        
        $imageName = 'images/'.time().'.'.$image->extension();

        MoneyLiquidity::where('id', $id)
                      ->update([
                            'name'          => $name,
                            'category_id'   => $category_id,
                            'partner_id'    => $partner_id,
                            'notes'         => $notes,
                            'type'          => $type,
                            'amount'        => $amount,
                            'price'         => $price,
                            'image'         => $imageName,
                      ]);

        $image->move(public_path('images'), $imageName);

        return view('keuangan')->with('success', 'Data berhasil ditambahkan !');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $category = Category::all();
        $partner = Partner::all();
        
        return view('owner.add-keuangan')->with(['categories' => $category, 'partners' => $partner ]);
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
        $name           = $request->title;
        $category_id    = $request->category;
        $partner_id     = $request->partner;
        $notes          = $request->detail;
        $type           = $request->type;
        $amount         = $request->amount;
        $price          = $request->price;
        $image          = $request->image;
        
        $imageName = 'images/'.time().'.'.$image->extension();

        MoneyLiquidity::create([
            'name'          => $name,
            'category_id'   => $category_id,
            'partner_id'    => $partner_id,
            'notes'         => $notes,
            'type'          => $type,
            'amount'        => $amount,
            'price'         => $price,
            'image'         => $imageName,
        ]);
        
        $image->move(public_path('images'), $imageName);

        return view('keuangan')->with('success', 'Data berhasil ditambahkan !');
    }
}
