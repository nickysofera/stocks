<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Register;

class RegisterController extends Controller
{
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::all();

        return view('register.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
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
            'first_name'=>'required',
            'last_name'=> 'required|string',
            'no_hp_email' => 'required|string',
            'jenis_kelamin' => 'required|string'
          ]);
          $register = new Register([
            'first_name' => $request->get('first_name'),
            'last_name'=> $request->get('last_name'),
            'no_hp_email'=> $request->get('no_hp_email'),
            'jenis_kelamin'=> $request->get('jenis_kelamin')
          ]);
          $register->save();
          return redirect('/test')->with('success', 'Register has been added');
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
        $register = Register::find($id);

        return view('register.edit', compact('register'));
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
            'jenis_kelamin'=> 'requried|string'
          ]);
    
          $register = Register::find($id);
          $register->first_name = $request->get('first_name');
          $register->last_name = $request->get('last_name');
          $register->no_hp_email = $request->get('no_hp_email');
          $register->jenis_kelamin = $request->get('jenis_kelamin');
          $test->save();
    
          return redirect('/test')->with('success', 'Register has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register = Register::find($id);
        $register->delete();
   
        return redirect('/test')->with('success', 'Register has been deleted Successfully');
    }
}
