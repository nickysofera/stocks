<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswas.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_first_name'=>'required',
            'mahasiswa_last_name'=> 'required|string',
            'mahasiswa_no_hp_email' => 'required|string'
          ]);
          $mahasiswa = new Mahasiswa([
            'mahasiswa_first_name' => $request->get('mahasiswa_first_name'),
            'mahasiswa_last_name'=> $request->get('mahasiswa_last_name'),
            'mahasiswa_no_hp_email'=> $request->get('mahasiswa_no_hp_email'),
            $checkbox = implode(",", $request->get('option'));
            $mahasiswa->dropdown=$request->get('dropdown');
            $mahasiswa->checkbox = $checkbox; 
          ]);
          $mahasiswa->save();
          return redirect('/mhs')->with('success', 'Mahasiswa has been added');
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required|string',
            'no_hp_email' => 'required|string',
            'jenis_kelamin'=> 'requred|srting'
          ]);
    
          $mahasiswa = Mahasiswa::find($id);
          $mahasiswa->mahasiswa_first_name = $request->get('mahasiswa_first_name');
          $mahasiswa->mahasiswa_last_name = $request->get('mahasiswa_last_name');
          $mahasiswa->mahasiswa_no_hp_email = $request->get('mahasiswa_no_hp_email');
          $mahasiswa->mahasiswa_jenis_kelamin = $request->get('mahasiswa_jenis_kelamin');
          $mahasiswa->save();
    
          return redirect('/mhs')->with('success', 'Mahasiswa has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
     $mahasiswa->delete();

     return redirect('/mhs')->with('success', 'Mahasiswa has been deleted Successfully');
    }
}
