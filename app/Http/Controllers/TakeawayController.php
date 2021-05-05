<?php

namespace App\Http\Controllers;

use App\Mail\Takeaway1Mail;
use App\Mail\Takeaway2Mail;
use App\TakeAway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TakeawayController extends Controller
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
        $imagepath_certificate = $request->certificate_takeaway_image->store('certificate_takeaway_image', 'public');

        $request->session()->all();
        $takeAway = TakeAway::create([
            'user_email' => $request->session()->get('user_email'),
            'user_name' => $request->session()->get('user_name'),
            'reason' => request("reason"), 
            'profession' => request("profession"),            
            'skck_image' => $imagepath_skck,
            'ktp_image' => $imagepath_ktp,
            'certificate_image' => $imagepath_certificate,
            'status' => null,
            'payment_image' => null
        ]);
        $name = $request->session()->get('user_name');
        $id = $takeAway->id;
        
        // dd($name);
        // 
        Mail::to($request->session()->get('user_email'))->send(new Takeaway1Mail($name,$id));
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

    public function upload()
    {
        //
        
        
        // dd($takeaway);
        return view('admin.takeaway.upload');    
    }

    public function payment(Request $request)
    {
        //
           
        $imagepath_takeawaypayment = $request->takeaway_payment->store('takeaway_payment_image','public');

        $takeaway = array();
        $takeaway['payment_image'] = $imagepath_takeawaypayment;      
            
        $id = request("id");

        $user_email = request("email");      

        Mail::to($user_email)->send(new Takeaway2Mail($id));

        DB::table('takeaway')->where('id', $id)->update($takeaway);
   

        return redirect('/');
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
