<?php

namespace App\Http\Controllers;

use App\Product;
use App\Slider;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders = DB::table('sliders')->where('show', true)->orderBy('position')->take(6)->get();
        $secondsliders = DB::table('secondsliders')->where('show', true)->orderBy('position')->take(6)->get();
        $services = DB::table('services')->orderBy('id','desc')->take(3)->get();


        return view('landing-page')->with([
            'sliders' => $sliders,
            'secondsliders' => $secondsliders,
            "services" => $services,
            'user' => Auth::user()

        ]);
    }
}
