<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Session;

use App\News;


use Auth;


class NewsController extends Controller
{


    public function index()
    {

        $pagination=8;
        $news = DB::table('news')->orderBy('id','desc')->paginate($pagination);


        return view('news')->with([
            "news" => $news,
            "user" => Auth::user()
        ]);
    }

    public function show($slug)
    {
        $news= News::where('slug',$slug)->firstOrFail();

        $newsKey= 'news_' . $news->id;
        if(!Session::has($newsKey)){
            $news->increment('visit_count');
            Session::put($newsKey,1);
        }



        return view('news_show')->with([
                "news"=>$news,
                "user" => Auth::user()
            ]
        );
    }

    public function addComment(Request $request){
        $comment=$request->comment;
        $id=$request->id;

        $creatComment=DB::table('comments')
        ->insert(['comment'=>$comment,'user_id'=>Auth::user()->id,'news_id'=>$id]);

        if($creatComment){
            return News::with('user','comments','id')->orderBy('created_at','DESC')->get();
        }

    }






}
