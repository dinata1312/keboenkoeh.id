<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        $data = User::where('id', $id)->first();

        return view('pengaturan-akun')->with('data', $data);
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
        $validator = $request->validate([
            'email' => 'email',
            'name'  => 'min:4',
            // 'old_password'  => 'min:6',
            'new_password'  => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password'  =>'min:6',
        ]);

        $updateData = User::where('id', $id)->update([
                      'name' => $request->name,
                      'password' => Hash::make($request->new_password),
                    ]);

        if($updateData){
            Session::put('alert', 'success');
            Session::put('alert-message', 'Data berhasil diperbarui');
        }else{
            Session::put('alert', 'failure');
            Session::put('alert-message', 'Mohon maaf. Data gagal diperbarui');
        }
        
        return redirect('pengaturan-akun/'.$id)->with('success', 'Data berhasil ditambahkan !');
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
