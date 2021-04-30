<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        
        return view('admin.dashboard.index');
    }


    public function edit($id)
    {
       
    }
    
    public function show()
    {
        return view('admin.dashboard.show');
    }

    public function update(Request $request , $id)
    {
       
        
    }

    public function destroy($id)
    {
      
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
