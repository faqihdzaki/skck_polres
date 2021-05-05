<?php

namespace App\Http\Controllers;

use App\Mail\Takeaway2Mail;
use App\TakeAway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DataTakeawayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $takeaway = DB::table('takeaway')->orderBy('id', 'DESC')->get();     
        // dd($takeaway)   ;
        return view('admin.data_takeaway.index')->with('takeaway', $takeaway);
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
        $takeaway = DB::table('takeaway')->where('id', $id)->get();
        // dd($takeaway);
        return view('admin.data_takeaway.show', compact('takeaway'));    
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
        DB::table('takeaway')->where('id', $id)->delete();
        return redirect('/admin/datatakeaway');
    }

    public function status(Request $request, $id)
    {
        $take = TakeAway::findOrFail($id);
       
        $takeaway = array();
        $takeaway['status'] = $request->status;
    
        DB::table('takeaway')->where('id', $id)->update($takeaway);     
        
        

        return redirect('/admin/datatakeaway');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$takeaway = DB::table('takeaway')
		->where('user_email','like',"%".$cari."%")
        ->orWhere('user_name','like',"%".$cari."%")        
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('admin.data_takeaway.index',['takeaway' => $takeaway]);
 
	}


}
