<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Mail\DeliveryMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $request->session()->put('user_email', $request->input('user_email'));        
        $request->session()->put('user_name', $request->input('user_name'));  
        //   dd(session()->all());
        return view('admin.delivery.index');
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
        $request->session()->all();
        $delivery = Delivery::create([
           $email =  'user_email' => $request->session()->get('user_email'),
            'user_name' => $request->session()->get('user_name'), 
            $name = 'name' => request("name"),
            'address' => request("address"),
            $no_telp = 'no_telp' => request("no_telp")            
        ]);
        Mail::to($request->session()->get('user_email'))->send(new DeliveryMail($request->$name));


        return redirect('/');
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

    public function payment(Request $request)
    {
        //
        $imagepath_deliverypayment = $request->delivery_payment->store('delivery_payment_image','public');
        $takeAway = Delivery::create([
            'user_id' => Auth::user()->id,    
            'name' => request("name"),
            'address' => request("address"),
            'no_telp' => request("no_telp")
            
        ]);
        // 
        return view('admin.delivery.index');
    }
}
