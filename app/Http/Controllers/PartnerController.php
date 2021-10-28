<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Partner::all();
        
        return view('owner.index-partner')->with('datas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('owner.add-partner');
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
        $name          = $request->name;
        $email         = $request->email;
        $middleman     = $request->middleman;
        $phone_number  = $request->phone_number;
        $address       = $request->address;
        $image         = $request->image;
        
        $imageName = 'images/'.time().'.'.$image->extension();

        Partner::create([
                    'name'          => $name,
                    'email'         => $email,
                    'middleman'     => $middleman,
                    'phone_number'  => $phone_number,
                    'address'       => $address,
                    'image'         => $imageName,
                ]);

        $image->move(public_path('images'), $imageName);

        return view('partner')->with('success', 'Data berhasil ditambahkan !');
        
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
        $data = Partner::where('id', $id)->first();
        
        return view('owner.detail-partner')->with('data', $data);
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
        $data = Partner::where('id', $id)->first();
        // dd($data);
        return view('owner.edit-partner')->with('data', $data);
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
        $name          = $request->name;
        $email         = $request->email;
        $middleman     = $request->middleman;
        $phone_number  = $request->phone_number;
        $address       = $request->address;
        $image         = $request->image;
        
        $imageName = 'images/'.time().'.'.$image->extension();

        Partner::where('id', $id)
                      ->update([
                            'name'          => $name,
                            'email'         => $email,
                            'middleman'     => $middleman,
                            'phone_number'  => $phone_number,
                            'address'       => $address,
                            'image'         => $imageName,
                      ]);

        $image->move(public_path('images'), $imageName);

        return view('partner')->with('success', 'Data berhasil ditambahkan !');
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
