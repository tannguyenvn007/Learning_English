<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => $request->get('remember_token')
        ]);
        $admin->save();
        return response()->json('Successfully added');
    }
}
