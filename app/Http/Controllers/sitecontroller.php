<?php

namespace App\Http\Controllers;

use App\createpost;
use App\createvideo;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posst=createpost::orderBy('created_at','DESC')->where('status',1)->take(4)->get();     //take 4 for small post
        $posst2=createpost::orderBy('created_at','DESC')->where('status',1)->take(1)->get();    //take 1 for large post

        $video=createvideo::orderBy('created_at','DESC')->where('status',1)->take(4)->get();    //take 4 video for small div
        $video2=createvideo::orderBy('created_at','DESC')->where('status',1)->take(1)->get();   //take 1 video for large div

        return view('Firstpage',compact('posst','posst2','video','video2'));

    }




    /**
     * Display the Video resource on single page named showpage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $shows=createvideo::where('slug',$slug)->get();
        return view('showpage',compact('shows'));
    }
    /**
     * Display the Post resource on single page named showpost.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function showpost($slug)
    {
        $show=createpost::where('slug',$slug)->get();
        return view('showpost',compact('show'));
    }


}
