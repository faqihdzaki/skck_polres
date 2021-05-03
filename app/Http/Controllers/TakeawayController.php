<?php

namespace App\Http\Controllers;

use App\TakeAway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function upload($id)
    {
        //
        
        $takeaway = DB::table('takeaway')->where('id', $id)->get();
        // dd($takeaway);
        return view('admin.takeaway.upload', compact('takeaway'));    
    }

    public function payment(Request $request, $id)
    {
        //
           
        $imagepath_takeawaypayment = $request->takeaway_payment->store('takeaway_payment_image','public');

        $takeaway = array();
        $takeaway['payment_image'] = $imagepath_takeawaypayment;      
            
        DB::table('takeaway')->where('id', $id)->update($takeaway);
   

        return redirect('/admin/takeawayhistory');
    }

    public function history()
    {
        //
        $id = Auth::user()->id;
        $takeaway = DB::table('takeaway')->where('user_id', $id)->get();

        

        // dd($takeaway)   ;
        return view('admin.takeaway.history')->with('takeaway', $takeaway);
    }

    public function SKCKTakeaway() {
        \Mail::send('emails.notify_skck_takeaway', [
            'name'=>'Faqih',
            'title'=>'Hai'
        ], function($message) {
            $message->to('faqihdzaki11@gmail.com');
        });
    }
}
