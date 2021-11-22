<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $password         = $request->password;

        User::create([
                    'role_id'       => $role,
                    'name'          => $name,
                    'email'         => $email,
                    'password'      => bcrypt($password),
                ]);

        return redirect()->route('petani')->with( ['data' => $data]);
    }
}
