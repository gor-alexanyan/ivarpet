<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Auth;

class ServiceController extends Controller
{

    public function index(){

        $services = DB::table('services')->orderBy('id','desc')->get();

        return view('service')->with([

            "services" => $services,
            "user" => Auth::user()
        ]);

    }



}
