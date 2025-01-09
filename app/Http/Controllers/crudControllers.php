<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = DB::select('SELECT * FROM data_user');
        return view('crud.index',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save['nama']=$request->nama;
        $save['no_hp']=$request->no_hp;
        $save['email']=$request->email;
        DB::table('data_user')->insert($save);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $one = DB::selectOne("SELECT * FROM data_user WHERE id = $id");
        return view('crud.tampil',compact('one'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $one = DB::table('data_user')->where('id',$id)->first();
        return view('crud.edit',compact('id','one'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $save['nama']=$request->nama;
        $save['no_hp']=$request->no_hp;
        $save['email']=$request->email;
        DB::table('data_user')->where('id',$id)->update($save);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('data_user')->where('id',$id)->delete();
        return redirect()->route('index');
    }
}
