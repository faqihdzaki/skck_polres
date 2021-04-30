<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //case
        $request->session()->put('case_1', $request->input('case_1'));        
        $request->session()->put('case_2', $request->input('case_2'));        
        $request->session()->put('case_3', $request->input('case_3'));        
        $request->session()->put('case_4', $request->input('case_4'));        
        $request->session()->put('case_5', $request->input('case_5'));        

        //offense
        $request->session()->put('offense_1', $request->input('offense_1'));        
        $request->session()->put('offense_2', $request->input('offense_2'));        
        $request->session()->put('offense_3', $request->input('offense_3'));  
        //   dd(session()->all());
        return view('admin.lain_lain.index');
    }


    public function index_en(Request $request)
    {
        //case
        $request->session()->put('case_1', $request->input('case_1'));        
        $request->session()->put('case_2', $request->input('case_2'));        
        $request->session()->put('case_3', $request->input('case_3'));        
        $request->session()->put('case_4', $request->input('case_4'));        
        $request->session()->put('case_5', $request->input('case_5'));        

        //offense
        $request->session()->put('offense_1', $request->input('offense_1'));        
        $request->session()->put('offense_2', $request->input('offense_2'));        
        $request->session()->put('offense_3', $request->input('offense_3'));  
        //   dd(session()->all());
        return view('admin.lain_lain.index_en');
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
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
