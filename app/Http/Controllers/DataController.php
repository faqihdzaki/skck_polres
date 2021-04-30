<?php

namespace App\Http\Controllers;

use App\SKCKForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skckform = DB::table('skckform')->get();        
        return view('admin.data_skck.index')->with('skckform', $skckform);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $skckform = DB::table('skckform')->where('id', $id)->first();
        $couple = DB::table('couple')->where('skck_id', $id)->get();
        $father = DB::table('father')->where('skck_id', $id)->get();
        $mother = DB::table('mother')->where('skck_id', $id)->get();
        $sibling = DB::table('sibling')->where('skck_id', $id)->get();
        $school = DB::table('school')->where('skck_id', $id)->get();
        $case = DB::table('case')->where('skck_id', $id)->get();    
        $offense = DB::table('offense')->where('skck_id', $id)->get();
        $orther_infromation = DB::table('orther_information')->where('skck_id', $id)->get();                
        // dd($skckform , $couple ,$father);
        return view('admin.data_skck.show', compact('skckform', 'couple','father','mother','sibling','school','case','offense','orther_infromation'));    
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skckform = DB::table('skckform')->where('id', $id)->first();
        $couple = DB::table('couple')->where('skck_id', $id)->get();
        $father = DB::table('father')->where('skck_id', $id)->get();
        $mother = DB::table('mother')->where('skck_id', $id)->get();
        $sibling = DB::table('sibling')->where('skck_id', $id)->get();
        $school = DB::table('school')->where('skck_id', $id)->get();
        $case = DB::table('case')->where('skck_id', $id)->get();    
        $offense = DB::table('offense')->where('skck_id', $id)->get();
        $orther_infromation = DB::table('orther_information')->where('skck_id', $id)->get();              
        // dd($skckform , $couple ,$father);
        return view('admin.data_skck.edit', compact('skckform', 'couple','father','mother','sibling','school','case','offense','orther_infromation'));    
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
        $skckform = SKCKForm::findOrFail($id);
        $imagepath_kk = $request->kk_image->store('kk','public');
        $storage_kk = Storage::delete($skckform->kk_image);
        $imagepath_ktp = $request->ktp_image->store('ktp','public');
        $storage_ktp = Storage::delete($skckform->ktp_image);
        $imagepath_your = $request->your_image->store('your','public');
        $storage_your = Storage::delete($skckform->your_image);
        $imagepath_fingerprint = $request->fingerprint_image->store('fingerprint','public');
        $storage_fingerprint = Storage::delete($skckform->fingerprint_image);

        $skck = array();
        $skck['name'] = $request->skck_name;
        $skck['born'] = $request->skck_born;
        $skck['date'] = $request->skck_date;
        $skck['relegion'] = $request->skck_relegion;        
        $skck['nationality'] = $request->skck_nationality;
        $skck['gender'] = $request->skck_gender;
        $skck['profession'] = $request->skck_profession;
        $skck['address'] = $request->skck_address;
        $skck['nik'] = $request->skck_nik;
        $skck['no_passport'] = $request->skck_no_passport;
        $skck['no_kita_kitap'] = $request->skck_no_kita_kitap;
        $skck['no_telp'] = $request->skck_no_telp;
        $skck['kk_image'] = $imagepath_kk;
        $skck['ktp_image'] = $imagepath_ktp;
        $skck['your_image'] = $imagepath_your;
        $skck['fingerprint_image'] = $imagepath_fingerprint;


        $couple = array();
        $couple['name'] = $request->couple_name;
        $couple['age'] = $request->couple_age;      
        $couple['relegion'] = $request->couple_relegion;        
        $couple['nationality'] = $request->couple_nationality;        
        $couple['profession'] = $request->couple_profession;     
        $couple['address'] = $request->couple_address;     
        
        $father = array();
        $father['name'] = $request->father_name;
        $father['age'] = $request->father_age;      
        $father['relegion'] = $request->father_relegion;        
        $father['nationality'] = $request->father_nationality;        
        $father['profession'] = $request->father_profession;  
        $father['address'] = $request->father_address;  

        $mother = array();
        $mother['name'] = $request->mother_name;
        $mother['age'] = $request->mother_age;      
        $mother['relegion'] = $request->mother_relegion;        
        $mother['nationality'] = $request->mother_nationality;        
        $mother['profession'] = $request->mother_profession;  
        $mother['address'] = $request->mother_address;  

        
        $sibling = array();
        $sibling['name'] = $request->sibling_name;
        $sibling['age'] = $request->sibling_age;      
        $sibling['address'] = $request->sibling_address;        
                   
        $school = array();
        $school['name'] = $request->school_name;
        $school['year'] = $request->school_year;     

        
        $case = array();
        $case['case_1'] = $request->case_1;
        $case['case_2'] = $request->case_2;
        $case['case_3'] = $request->case_3;
        $case['case_4'] = $request->case_4;
        $case['case_5'] = $request->case_5;
        
        $offense = array();
        $offense['offense_1'] = $request->offense_1;
        $offense['offense_2'] = $request->offense_2;
        $offense['offense_3'] = $request->offense_3;

        $orther_information = array();
        $orther_information['profession_history'] = $request->profession_history;
        $orther_information['hoby'] = $request->information_hoby;
        $orther_information['address'] = $request->information_no_telp;


        


        DB::table('skckform')->where('id', $id)->update($skck);
        DB::table('couple')->where('skck_id', $id)->update($couple);
        DB::table('father')->where('skck_id', $id)->update($father);
        DB::table('mother')->where('skck_id', $id)->update($mother);
        DB::table('sibling')->where('skck_id', $id)->update($sibling);
        DB::table('school')->where('skck_id', $id)->update($school);
        DB::table('case')->where('skck_id', $id)->update($case);
        DB::table('offense')->where('skck_id', $id)->update($offense);
        DB::table('orther_information')->where('skck_id', $id)->update($orther_information);        
        return redirect('/admin/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('skckform')->where('id', $id)->delete();
        DB::table('couple')->where('skck_id', $id)->delete();
        DB::table('father')->where('skck_id', $id)->delete();
        DB::table('mother')->where('skck_id', $id)->delete();
        DB::table('sibling')->where('skck_id', $id)->delete();
        DB::table('school')->where('skck_id', $id)->delete();
        DB::table('case')->where('skck_id', $id)->delete();
        DB::table('offense')->where('skck_id', $id)->delete();
        DB::table('orther_information')->where('skck_id', $id)->delete();        
        return redirect('/admin/data');
    }

    public function status(Request $request, $id)
    {
        $skckform = SKCKForm::findOrFail($id);
       
        $skck = array();
        $skck['status'] = $request->status;
     
        DB::table('skckform')->where('id', $id)->update($skck);      
        return redirect('/admin/data');
    }


// $image = $request->file('kk_image');
        
    //     if ($image) {

    //         $image_name = date('dmy_H_s_i');
    //         $ext = strtolower($image->getClientOriginalExtension());
    //         $image_full_name = $image_name . '.' . $ext;
    //         $upload_path = 'assets/img/recipe/';
    //         $image_url = $upload_path . $image_full_name;
    //         $success = $image->move($upload_path, $image_full_name);

    //         $image['kk_image'] = $image_full_name;
    //         DB::table('image')->where('skck_id', $id)->update($image);
    //         DB::table('skckform')->where('id', $id)->update($skck);
    //         DB::table('couple')->where('skck_id', $id)->update($couple);
    //         DB::table('father')->where('skck_id', $id)->update($father);
    //         DB::table('mother')->where('skck_id', $id)->update($mother);
    //         DB::table('sibling')->where('skck_id', $id)->update($sibling);
    //         DB::table('school')->where('skck_id', $id)->update($school);
    //         DB::table('case')->where('skck_id', $id)->update($case);
    //         DB::table('offense')->where('skck_id', $id)->update($offense);
    //         DB::table('orther_information')->where('skck_id', $id)->update($orther_information);
    //         DB::table('sponsor')->where('skck_id', $id)->update($sponsor);
    //         return redirect('/admin/dashboard');
    //     } else {
    //         DB::table('skckform')->where('id', $id)->update($skck);
    //         DB::table('couple')->where('skck_id', $id)->update($couple);
    //         DB::table('father')->where('skck_id', $id)->update($father);
    //         DB::table('mother')->where('skck_id', $id)->update($mother);
    //         DB::table('sibling')->where('skck_id', $id)->update($sibling);
    //         DB::table('school')->where('skck_id', $id)->update($school);
    //         DB::table('case')->where('skck_id', $id)->update($case);
    //         DB::table('offense')->where('skck_id', $id)->update($offense);
    //         DB::table('orther_information')->where('skck_id', $id)->update($orther_information);
    //         DB::table('sponsor')->where('skck_id', $id)->update($sponsor);
    //         return redirect('/admin/dashboard');
    //     }

}
