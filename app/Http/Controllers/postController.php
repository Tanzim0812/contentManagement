<?php

namespace App\Http\Controllers;

use App\createpost;
use Illuminate\Http\Request;
use Session;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.Createpost');
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
            'title' => 'required|unique:createposts|max:255',
            'body' => 'required',
            'image' => 'required',
        ]);

        $post = new createpost();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $this->slug_generator($request->title);

        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'. $extension;
            $file->move('files/uploads/',$filename);
            $post->image= $filename;

        }else{
            return $request;
            $post ->image= '';
        }

        //dd($post);
        $post->save();
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
        $show=createpost::get();
        return view('admin.managepost',compact('show'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postdel=createpost::find($id);
        $postdel->delete();
        return redirect()->route('manage_post');
    }

//change the status in real time
    public function poststatus($id,$post_status){
        $post= createpost::find($id);
        $post->status= $post_status;
        $post->save();
        return response()->json(['message'=>'success']);

    }
    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
