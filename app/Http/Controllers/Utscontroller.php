<?php

namespace App\Http\Controllers;

use App\Models\midsemester;
use Illuminate\Http\Request;

class Utscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=midsemester::all();
        $id=0;
        // dd($data);
        return view('mid', compact('data','id'));
    }
    public function tambah(){
        return view('tambahdata');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertdata(Request $request)
    {
        midsemester::create($request->all());
        return redirect()->route('mid')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampildata($id)
    {
        $data = midsemester::find($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedata(Request $request, $id)
    {
        $data = midsemester::find($id);
        $data->update($request->all());
        return redirect()->route('mid')->with('success','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = midsemester::find($id);
        $data->delete();
        return redirect()->route('mid')->with('success','Data Berhasil Di Update');
    }
}
