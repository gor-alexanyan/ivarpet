<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Image;
use App\Resume;
use TCG\Voyager\Models\Post;

class ResumeController extends Controller
{
    public function index(){
        $resumes = DB::table('resumes')->get();
        return view('resume')->with([
            "resume" => $resumes,
            "user" => Auth::user()
        ]);
    }

    public function addResume(Request $request){
        $pictures = $request->file('resume_pic');
        $filename = time() .'.'.$pictures->getClientOriginalExtension();
        Image::make($pictures)->resize(300, 300)->save( public_path('storage/resumes/'.date('FY').'/'. $filename ) );
        $resume_pic = 'resumes/'.date('FY').'/'.$filename;
        $resumes= Resume::create([
           'name'=> $request->name,
           'surname'=> $request->surname,
           'profession'=> $request->profession,
           'b_day'=> $request->b_day,
           'b_month' => $request->b_month,
           'b_year' => $request -> b_year,
           'address' => $request->address,
           'gender'=> $request->gender,
           'work_experience' => implode('/',$request ->work_experience),
           'education' => implode('/',$request->education),
           'ability' => implode('/',$request->ability),
           'lang' => implode('/',$request->lang),
           'certificate' => implode('/',$request->certificate),
           'hobby' => implode('/',$request->hobby),
           'resume_pic'=>$resume_pic
        ]);

        if($resumes){
            return back();
        }else{
            return redirect()->route('resume');
        }
    }
}
