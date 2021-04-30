<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoupleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->put('skck_name', $request->input('name'));
        $request->session()->put('skck_born', $request->input('born'));
        $request->session()->put('skck_date', $request->input('date'));
        $request->session()->put('skck_relegion', $request->input('relegion'));
        $request->session()->put('skck_nationality', $request->input('nationality'));
        $request->session()->put('skck_gender', $request->input('gender'));
        $request->session()->put('skck_profession', $request->input('profession'));
        $request->session()->put('skck_address', $request->input('address'));
        $request->session()->put('skck_nik', $request->input('nik'));
        $request->session()->put('skck_no_passport', $request->input('no_passport'));
        $request->session()->put('skck_no_kita_kitap', $request->input('no_kita_kitap'));
        $request->session()->put('skck_no_telp', $request->input('no_telp'));
        // dd(session()->all());
        return view('admin.couple.index');
    }


    public function index_en(Request $request)
    {
        $request->session()->put('skck_name', $request->input('name'));
        $request->session()->put('skck_born', $request->input('born'));
        $request->session()->put('skck_date', $request->input('date'));
        $request->session()->put('skck_relegion', $request->input('relegion'));
        $request->session()->put('skck_nationality', $request->input('nationality'));
        $request->session()->put('skck_gender', $request->input('gender'));
        $request->session()->put('skck_profession', $request->input('profession'));
        $request->session()->put('skck_address', $request->input('address'));        
        $request->session()->put('skck_no_passport', $request->input('no_passport'));
        $request->session()->put('skck_no_kita_kitap', $request->input('no_kita_kitap'));
        $request->session()->put('skck_no_telp', $request->input('no_telp'));
        // dd(session()->all());
        return view('admin/couple/index_en');
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
