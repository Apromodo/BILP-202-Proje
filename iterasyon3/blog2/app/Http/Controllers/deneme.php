<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class deneme extends Controller
{
    function test(){

        $user = DB::table('users')->where('name', 'John')->first();

        echo $user->name;
    }
    public function test2() {
        $data = DB::table('data')->get();

        return view('sayfa', ['data' => $data]);
    }
}
