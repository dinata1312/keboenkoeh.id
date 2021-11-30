<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InformationController extends Controller
{
    public function preview($id)
    {
        //
        $data = Information::where('id', $id)->first();
        return view('content')->with('data', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Information::all();
        // dd($data);
        return view('admin.index-trivia')->with('datas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add-trivia');
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
        $title       = $request->title;
        $description = $request->title;
        $image       = $request->image;
        $status      = $request->status;
        
        $imageName = 'images/'.time().'.'.$image->extension();

        $insertData = Information::create([
            'title'         => $title,
            'content'       => $description,
            'status'    => $status,
            'image'         => $imageName,
            'user_id'       => Session::get('id'),
        ]);
        
        if ($insertData){
            $image->move(public_path('images'), $imageName);
            Session::put('alert', 'success');
            Session::put('alert-message', 'Data berhasil diperbarui');
        }else{
            Session::put('alert', 'failure');
            Session::put('alert-message', 'Mohon maaf! Data gagal diperbarui');
        }
        
        return redirect('informasi');
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
        $data = Information::where('id', $id)->first();
        
        return view('admin.detail-informasi');
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
        $data = Information::where('id', $id)->first();
        
        return view('admin.edit-trivia')->with('data', $data);
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
        $title       = $request->title;
        $description = $request->content;
        $image       = $request->image;
        $status      = $request->status;

        if(isset($image)){
            $imageName = 'images/'.time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);

            $insertData = Information::where('id', $id)
                        ->update([
                            'title'         => $title,
                            'content'       => $description,
                            'status'        => $status,
                            'image'         => $imageName,
                            'user_id'       => Session::get('id'),
                        ]);
        }else{
            $insertData = Information::where('id', $id)
                        ->update([
                            'title'         => $title,
                            'content'       => $description,
                            'status'        => $status,
                            'user_id'       => Session::get('id'),
                        ]);
        }
        
        if ($insertData){
            Session::put('alert', 'success');
            Session::put('alert-message', 'Data berhasil diperbarui');
        }else{
            Session::put('alert', 'failure');
            Session::put('alert-message', 'Mohon maaf! Data gagal diperbarui');
        }
        
        return redirect('informasi');
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
