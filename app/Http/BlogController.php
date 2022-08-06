<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$newPost=BlogPost::create([
        //    'title'=>$request->title,
        //    'description'=>$request->description,
        //]);
        //return redirect('/admin/blogs');
        $newPost= new post;
        $newPost->title=$request->input('title');
        $newPost->slug=$request->input('slug');
        $newPost->description=$request->input('description');
        $newPost->cid=$request->input('cid');
        if($request->hasfile('news_image'))
        {
            $file=$request->file('news_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/',$filename);
            $newPost->news_image=$filename;
        }
        $newPost->save();
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newPost=BlogPost::find($id);
        return view('admin.edit',compact('newPost'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newPost=BlogPost::find($id);
        $newPost->title=$request->input('title');
        $newPost->description=$request->input('description');
        if($request->hasfile('news_image'))
        {   
            $destination='uploads/'.$newPost->news_image;
            
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file=$request->file('news_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/',$filename);
            $newPost->news_image=$filename;
        }
        $newPost->update();
        
        return redirect()->back()->with('status','Data updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newPost= BlogPost::find($id);
        $destination='uploads/'.$newPost->news_image;
            
            if(File::exists($destination)){
                File::delete($destination);
            }
        $newPost->delete();
        return redirect()->back()->with('status','Data deleted');
        
    }
}
