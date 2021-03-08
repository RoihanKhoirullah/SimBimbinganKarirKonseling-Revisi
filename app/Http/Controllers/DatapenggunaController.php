<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class DatapenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtpengguna = User::all();
        return view('admin.Datapengguna.index' , compact('dtpengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Datapengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request -> name,
            'mapel' => $request -> mapel,
            'level' => $request -> level,
            'email' => $request -> email,
            'password' => bcrypt($request->password),
           
            
         ]);
        return redirect('/admin/data-akun')->with('toast_success', 'Data Berhasil Ditambahkan');
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
        // $dtpengguna = User::findorfail($id);
        // return view('Datapengguna.edit',compact('dtpengguna'));
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
        // $request->validate([
        //     'name' => 'required',
        //     'level' => 'required',
        //     'email' => 'required',
        //     'password' => bcrypt($request->password),
        // ]);
        // User::findOrFail($id)->update($request->all());
        // return redirect()->route('Datapengguna.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedtpengguna = User::findorfail($id);
        $deletedtpengguna->delete();
        return redirect('/admin/data-akun')->with('toast_success', 'Data Berhasil Dihapus'); 
    }
}
