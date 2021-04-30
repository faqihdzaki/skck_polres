<?php

namespace App\Http\Controllers;

use App\TakeAway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TakeawayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.takeaway.index');
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

        $imagepath_skck = $request->skck_takeaway_image->store('skck_takeaway_image', 'public');
        $imagepath_ktp = $request->ktp_takeaway_image->store('ktp_takeaway_image', 'public');

        $takeAway = TakeAway::create([
            'reason' => request("reason"),
            'user_id' => Auth::user()->id,
            'skck_image' => $imagepath_skck,
            'ktp_image' => $imagepath_ktp,
            'status' => null,
            'payment_image' => null
        ]);
        // 
        return view('admin.takeaway.index');
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

    public function upload()
    {
        //
        return view('admin.takeaway.upload');
    }
}
