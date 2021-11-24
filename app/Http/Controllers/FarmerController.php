<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class FarmerController extends Controller
{
    public function index()
    {
        $data = User::select('name','email','role_id')->where('role_id','=','3')->get();
        return view ('owner.index-farmer', compact('data'));
    }

    public function create()
    {
        return view ('owner.add-farmer');
    }

    public function store(Request $request)
    {
        $data = User::select('name','email','role_id')->where('role_id','=','3')->get();
        //
        $role          = $request->role;
        $name          = $request->name;
        $email         = $request->email;
        $password      = $request->password;

        $insertData = User::create([
                    'role_id'       => $role,
                    'name'          => $name,
                    'email'         => $email,
                    'password'      => bcrypt($password),
                ]);

        if ($insertData){
            Session::put('alert', 'success');
            Session::put('alert-message', 'Data berhasil diperbarui');
        }else{
            Session::put('alert', 'failure');
            Session::put('alert-message', 'Mohon maaf. Data gagal diperbarui');
        }
        return redirect()->route('akun')->with( ['data' => $data]);
    }
}
