<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('usuario')->get();

        // dd($users);

        return view('user',['usuarios'=> $users]);
    }
}
