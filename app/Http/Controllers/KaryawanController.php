<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function addKaryawan(){
        return view ('addKaryawan');
    }

    public function storeKaryawan(Request $request){
        karyawan::create([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'PhoneNumber' => $request->PhoneNumber,
        ]);
        return redirect('/dashboard');
    }

    public function show(){
        $karyawans = karyawan::all();
        return view('dashboard', compact('karyawans'));
    }

    public function edit($id){
        $perkaryawan = karyawan::findOrFail($id);
        return view('editKaryawan', compact('perkaryawan'));
    }

    public function update(Request $request, $id){
        karyawan::findOrFail($id)->update([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'PhoneNumber' => $request->PhoneNumber,
        ]);
        return redirect('/dashboard');
    }

    public function delete($id){
        karyawan::destroy($id);
        return redirect('/dashboard');
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
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(karyawan $karyawan)
    {
        //
    }
}
