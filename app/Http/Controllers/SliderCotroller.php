<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.admin.slider');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.admin.createslider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Slider();
        $data->name=$request->name;
        $data->desc=$request->desc;
        $data->price=$request->price;


        if ($request->hasFile('img')) {
            $file=$request->img->store('upload', 'public');
            $data->img=$file;
        }else{
            $errors="File not set";
            return redirect()->back()
                    ->withInput($request->input())
                    ->with("msgError", $errors);
        }

        $data->save();
        if ($data) {
            return redirect()->back()->with('message', 'Product Store successfully!');
        }
        else{
            return redirect()->back()->withInput($request->input())
            ->with('msgError', 'Record do not update in database!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $result=Slider::where('id','=',$id)->get();

        

        if ($result) {
            return view('website.admin.editslider')->with("result",$result);
        }else{
            return view('website.admin.editslider')->with("msgError","Record Not Found");
        }
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
        $result=Slider::find($id);

        $result->name=$request->name;
        $result->desc=$request->desc;
        $result->price=$request->price;

        if ($request->hasFile('img')) {
            $file=$request->img->store('upload', 'public');
            $result->img=$file;
        }else{
            $errors="File not set";
            return redirect()->back()
                    ->withInput($request->input())
                    ->with("msgError", $errors);
        }

        $result->save();

        if ($result) {
            return redirect('show/slider')->with('message', 'Product updated successfully!');
        }
        else{
            return redirect()->back()->withInput($request->input())
            ->with('msgError', 'Record do not update in database!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $result=Slider::where('id', $id)->first()->delete();
        

        if ($result) {
            return redirect('show/slider')->with('message', 'Product deleted successfully!');
        }
        else{
            return redirect()->back()
            ->with('msgError', 'Record do not delete in database!');
        }
    }
}
