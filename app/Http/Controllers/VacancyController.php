<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Vacancy;

class VacancyController extends Controller
{
    public function index(){
        $vacancies = DB::table('vacancies')->orderBy('id','desc')->get();
        return view('vacancy')->with([
            "vacancy" => $vacancies,
            "user" => Auth::user()
        ]);
    }

    public function addVacancy(Request $request){
        $vacancies=Vacancy::create([
        'work_name'=>$request->vacancy,
        'job_desc'=> $request->jobDesc,
        'skills' => $request->skills,
        'user_name' => $request->user_name,
        'dead_day'=> $request->dead_day,
        'dead_month'=> $request->dead_month,
        'dead_year' => $request -> dead_year,
        'user_avatar'=>$request->user_avatar

        ]);

        if($vacancies){
            return back();
        }else{
            return redirect()->route('vacancy');
        }


    }
}
