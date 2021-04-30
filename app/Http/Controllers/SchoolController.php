<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Couple
        $request->session()->put('couple_name', $request->input('couple_name'));
        $request->session()->put('couple_age', $request->input('couple_age'));
        $request->session()->put('couple_relegion', $request->input('couple_relegion'));
        $request->session()->put('couple_nationality', $request->input('couple_nationality'));
        $request->session()->put('couple_profession', $request->input('couple_profession'));
        $request->session()->put('couple_address', $request->input('couple_address'));

        //father
        $request->session()->put('father_name', $request->input('father_name'));
        $request->session()->put('father_age', $request->input('father_age'));
        $request->session()->put('father_relegion', $request->input('father_relegion'));
        $request->session()->put('father_nationality', $request->input('father_nationality'));
        $request->session()->put('father_profession', $request->input('father_profession'));
        $request->session()->put('father_address', $request->input('father_address'));

        //mother
        $request->session()->put('mother_name', $request->input('mother_name'));
        $request->session()->put('mother_age', $request->input('mother_age'));
        $request->session()->put('mother_relegion', $request->input('mother_relegion'));
        $request->session()->put('mother_nationality', $request->input('mother_nationality'));
        $request->session()->put('mother_profession', $request->input('mother_profession'));
        $request->session()->put('mother_address', $request->input('mother_address'));

        //sibling
        $request->session()->put('sibling_name', $request->input('sibling_name'));
        $request->session()->put('sibling_age', $request->input('sibling_age'));
        $request->session()->put('sibling_address', $request->input('sibling_address'));

        // dd(session()->all());
        return view('admin.pendidikan.index');
    }

    public function index_en(Request $request)
    {
        //Couple
        $request->session()->put('couple_name', $request->input('couple_name'));
        $request->session()->put('couple_age', $request->input('couple_age'));
        $request->session()->put('couple_relegion', $request->input('couple_relegion'));
        $request->session()->put('couple_nationality', $request->input('couple_nationality'));
        $request->session()->put('couple_profession', $request->input('couple_profession'));
        $request->session()->put('couple_address', $request->input('couple_address'));

        //father
        $request->session()->put('father_name', $request->input('father_name'));
        $request->session()->put('father_age', $request->input('father_age'));
        $request->session()->put('father_relegion', $request->input('father_relegion'));
        $request->session()->put('father_nationality', $request->input('father_nationality'));
        $request->session()->put('father_profession', $request->input('father_profession'));
        $request->session()->put('father_address', $request->input('father_address'));

        //mother
        $request->session()->put('mother_name', $request->input('mother_name'));
        $request->session()->put('mother_age', $request->input('mother_age'));
        $request->session()->put('mother_relegion', $request->input('mother_relegion'));
        $request->session()->put('mother_nationality', $request->input('mother_nationality'));
        $request->session()->put('mother_profession', $request->input('mother_profession'));
        $request->session()->put('mother_address', $request->input('mother_address'));

        //sibling
        $request->session()->put('sibling_name', $request->input('sibling_name'));
        $request->session()->put('sibling_age', $request->input('sibling_age'));
        $request->session()->put('sibling_address', $request->input('sibling_address'));
        $request->session()->put('sibling_occupation', $request->input('sibling_occupation'));

        // dd(session()->all());
        return view('admin.pendidikan.index_en');
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
