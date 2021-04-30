<?php

namespace App\Http\Controllers;


use App\Couple;
use App\Cases;
use App\Cases_EN;
use App\Couple_EN;
use App\Father;
use App\Father_EN;
use App\Mother;
use App\Mother_EN;
use App\Offense;
use App\Offense_EN;
use App\OrtherInformation;
use App\OrtherInformation_EN;
use App\School;
use App\School_EN;
use App\Sibling;
use App\Sibling_EN;
use App\SKCKForm;
use App\SKCKForm_EN;
use App\Sponsor_EN;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $request->session()->put('profession_history', $request->input('profession_history'));
        $request->session()->put('hoby', $request->input('hoby'));
        $request->session()->put('information_address', $request->input('address'));
        return view('admin.lampiran.index');
    }


    public function index_en(Request $request)
    {
       
        $request->session()->put('sponsor_name', $request->input('name'));
        $request->session()->put('sponsor_address', $request->input('address'));
        $request->session()->put('sponsor_no_telp', $request->input('no_telp'));
        $request->session()->put('sponsor_type', $request->input('type'));

        return view('admin.lampiran.index_en');
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
    
        $imagepath_kk = $request->kk_image->store('kk','public');
        $imagepath_ktp = $request->ktp_image->store('ktp','public');
        $imagepath_your = $request->your_image->store('your','public');
        $imagepath_fingerprint = $request->fingerprint_image->store('fingerprint','public');

        // $request->session($imagepath_kk);
        // $request->session($imagepath_ktp);
        // $request->session($imagepath_your);
        // $request->session($imagepath_fingerprint);
        // $request->session()->put('kk_image', $request->file( 'kk_image')->getClientOriginalName());
        // $request->session()->put('ktp_image', $request->file( 'ktp_image')->getClientOriginalName());
        // $request->session()->put('your_image', $request->file( 'your_image')->getClientOriginalName());
        // $request->session()->put('fingerprint_image', $request->file( 'fingerprint_image')->getClientOriginalName());

        $request->session()->all();
            dd(session()->all());
        $skck = SKCKForm::create([
            'name' => $request->session()->get('skck_name'),
            'born' => $request->session()->get('skck_born'),
            'date' => $request->session()->get('skck_date'),
            'relegion' => $request->session()->get('skck_relegion'),
            'nationality' => $request->session()->get('skck_nationality'),
            'gender' => $request->session()->get('skck_gender'),
            'profession' => $request->session()->get('skck_profession'),
            'address' => $request->session()->get('skck_address'),
            'nik' => $request->session()->get('skck_nik'),
            'no_passport' => $request->session()->get('skck_no_passport'),
            'no_kita_kitap' => $request->session()->get('skck_no_kita_kitap'),
            'no_telp' => $request->session()->get('skck_no_telp'),
            'kk_image' => $imagepath_kk,
            'ktp_image' => $imagepath_ktp,
            'your_image' => $imagepath_your,
            'fingerprint_image' => $imagepath_fingerprint,
            'user_id' => Auth::user()->id,
            'status' => NULL
        ]);
        // return $skck;
        $couple = Couple::create([
            'skck_id' =>$skck->id,
            'name' => $request->session()->get('couple_name'),
            'age' => $request->session()->get('couple_age'),
            'relegion' => $request->session()->get('couple_relegion'),
            'nationality' => $request->session()->get('couple_nationality'),
            'profession' => $request->session()->get('couple_profession'),
            'address' => $request->session()->get('couple_address'),
        ]);

        $father = Father::create([
            'skck_id' =>$skck->id,
            'name' => $request->session()->get('father_name'),
            'age' => $request->session()->get('father_age'),
            'relegion' => $request->session()->get('father_relegion'),
            'nationality' => $request->session()->get('father_nationality'),
            'profession' => $request->session()->get('father_profession'),
            'address' => $request->session()->get('father_address'),
        ]);

        Mother::create([
            'skck_id' =>$skck->id,
            'name' => $request->session()->get('mother_name'),
            'age' => $request->session()->get('mother_age'),
            'relegion' => $request->session()->get('mother_relegion'),
            'nationality' => $request->session()->get('mother_nationality'),
            'profession' => $request->session()->get('mother_profession'),
            'address' => $request->session()->get('mother_address'),
        ]);

        Sibling::create([
            'skck_id' =>$skck->id,
            'name' => $request->session()->get('sibling_name'),
            'age' => $request->session()->get('sibling_age'),            
            'address' => $request->session()->get('sibling_address'),
            
        ]);

        School::create([
            'skck_id' =>$skck->id,
            'name' => $request->session()->get('school_name'),
            'year' => $request->session()->get('school_year'),                        
        ]);
        
        Cases::create([
            'skck_id' =>$skck->id,
            'case_1' => $request->session()->get('case_1'),
            'case_2' => $request->session()->get('case_2'),   
            'case_3' => $request->session()->get('case_3'),   
            'case_4' => $request->session()->get('case_4'),   
            'case_5' => $request->session()->get('case_5'),                        
        ]);

        Offense::create([
            'skck_id' =>$skck->id,
            'offense_1' => $request->session()->get('offense_1'),
            'offense_2' => $request->session()->get('offense_2'),   
            'offense_3' => $request->session()->get('offense_3'),   
            'offense_4' => $request->session()->get('offense_4'),                       
        ]);

        OrtherInformation::create([
            'skck_id' =>$skck->id,
            'profession_history' => $request->session()->get('profession_history'),
            'hoby' => $request->session()->get('hoby'),   
            'address' => $request->session()->get('information_address'),                                   
        ]);

        

     



        return view('admin.skckform.index');
    }

    public function store_en(Request $request)
    {
    
        $imagepath_kk = $request->kk_image->store('kk_en','public');        
        $imagepath_your = $request->your_image->store('your_en','public');
        $imagepath_fingerprint = $request->fingerprint_image->store('fingerprint_en','public');

        // $request->session($imagepath_kk);
        // $request->session($imagepath_ktp);
        // $request->session($imagepath_your);
        // $request->session($imagepath_fingerprint);
        // $request->session()->put('kk_image', $request->file( 'kk_image')->getClientOriginalName());
        // $request->session()->put('ktp_image', $request->file( 'ktp_image')->getClientOriginalName());
        // $request->session()->put('your_image', $request->file( 'your_image')->getClientOriginalName());
        // $request->session()->put('fingerprint_image', $request->file( 'fingerprint_image')->getClientOriginalName());

        $request->session()->all();
            // dd(session()->all());
        $skck_en = SKCKForm_EN::create([
            'name' => $request->session()->get('skck_name'),
            'born' => $request->session()->get('skck_born'),
            'date' => $request->session()->get('skck_date'),
            'relegion' => $request->session()->get('skck_relegion'),
            'nationality' => $request->session()->get('skck_nationality'),
            'gender' => $request->session()->get('skck_gender'),
            'profession' => $request->session()->get('skck_profession'),
            'address' => $request->session()->get('skck_address'),            
            'no_passport' => $request->session()->get('skck_no_passport'),
            'no_kita_kitap' => $request->session()->get('skck_no_kita_kitap'),
            'no_telp' => $request->session()->get('skck_no_telp'),
            'kk_image' => $imagepath_kk,            
            'your_image' => $imagepath_your,
            'fingerprint_image' => $imagepath_fingerprint,
            'user_id' => Auth::user()->id,
            'status' => NULL
        ]);
        // return $skck;
        $couple = Couple_EN::create([
            'skck_en_id' =>$skck_en->id,
            'name' => $request->session()->get('couple_name'),
            'age' => $request->session()->get('couple_age'),
            'relegion' => $request->session()->get('couple_relegion'),
            'nationality' => $request->session()->get('couple_nationality'),
            'profession' => $request->session()->get('couple_profession'),
            'address' => $request->session()->get('couple_address'),
        ]);

        $father = Father_EN::create([
            'skck_en_id' =>$skck_en->id,
            'name' => $request->session()->get('father_name'),
            'age' => $request->session()->get('father_age'),
            'relegion' => $request->session()->get('father_relegion'),
            'nationality' => $request->session()->get('father_nationality'),
            'profession' => $request->session()->get('father_profession'),
            'address' => $request->session()->get('father_address'),
        ]);

        Mother_EN::create([
            'skck_en_id' =>$skck_en->id,
            'name' => $request->session()->get('mother_name'),
            'age' => $request->session()->get('mother_age'),
            'relegion' => $request->session()->get('mother_relegion'),
            'nationality' => $request->session()->get('mother_nationality'),
            'profession' => $request->session()->get('mother_profession'),
            'address' => $request->session()->get('mother_address'),
        ]);

        Sibling_EN::create([
            'skck_en_id' =>$skck_en->id,
            'name' => $request->session()->get('sibling_name'),
            'age' => $request->session()->get('sibling_age'),            
            'address' => $request->session()->get('sibling_address'),
            'occupation' => $request->session()->get('sibling_occupation')
        ]);

        School_EN::create([
            'skck_en_id' =>$skck_en->id,
            'name' => $request->session()->get('school_name'),
            'year' => $request->session()->get('school_year'),                        
        ]);
        
        Cases_EN::create([
            'skck_en_id' =>$skck_en->id,
            'case_1' => $request->session()->get('case_1'),
            'case_2' => $request->session()->get('case_2'),   
            'case_3' => $request->session()->get('case_3'),   
            'case_4' => $request->session()->get('case_4'),   
            'case_5' => $request->session()->get('case_5'),                        
        ]);

        Offense_EN::create([
            'skck_en_id' =>$skck_en->id,
            'offense_1' => $request->session()->get('offense_1'),
            'offense_2' => $request->session()->get('offense_2'),   
            'offense_3' => $request->session()->get('offense_3'),   
            'offense_4' => $request->session()->get('offense_4'),                       
        ]);

        OrtherInformation_EN::create([
            'skck_en_id' =>$skck_en->id,
            'profession_history' => $request->session()->get('profession_history'),
            'hoby' => $request->session()->get('hoby'),   
            'address' => $request->session()->get('information_address'),                                   
        ]);
        Sponsor_EN::create([
            'skck_en_id' =>$skck_en->id,
            'name' => $request->session()->get('sponsor_name'),
            'address' => $request->session()->get('sponsor_address'),   
            'no_telp' => $request->session()->get('sponsor_no_telp'),                                   
            'type' => $request->session()->get('sponsor_type'),                                   
        ]);

     



        return view('admin.skckform.index_en');
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
