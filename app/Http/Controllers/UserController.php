<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->get();
        return view('indexuser', compact('user'));

    }

    public function show($id)
    {
        $user = DB::table('users')->find($id);
        //dd($user);
        return view('show', compact('user'));

    }

}
