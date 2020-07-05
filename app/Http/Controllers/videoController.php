<?php

namespace App\Http\Controllers;

use App\createvideo;
use Illuminate\Http\Request;
use Session;
class videoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Createvideo');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:createvideos|max:255',
            'body' => 'required|unique:createvideos',
            'link' => 'required',
        ]);

        $video = new createvideo();
        $video->title = $request->title;
        $video->body = $request->body;
        $video->link = $request->link;
        $video->slug = $this->slug_generator($request->title);
        //dd($video);
        $video->save();
        Session::flash('save','Save Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $show=createvideo::get();
        return view('admin.managevideo',compact('show'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $viddel=createvideo::find($id);
        $viddel->delete();
        return redirect()->route('manage_video');
    }

    /**
     * Change the status from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function videostatus($id,$video_status){
        $video= createvideo::find($id);
        $video->status= $video_status;
        $video->save();
        return response()->json(['message'=>'success']);

    }
    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
