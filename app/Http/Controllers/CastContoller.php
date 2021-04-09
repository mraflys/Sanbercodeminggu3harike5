<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CastContoller extends Controller
{
    public function create(){
        return view('cast/create');
    }
    public function store(Request $request){
        $query = DB::table('cast')->insert([
            "id" => $request["id"],
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast');
    }
    public function index(){
        $cast = DB::table('cast')->get();
        return view('cast', compact('cast'));
    }

    public function show($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('cast.show', compact('cast'));
    }

    public function edit($id){
        $cast = DB::table('cast')->where('id', $id)->first();
        return view('cast.edit', compact('cast'));
    }

    public function update($id, Request $request){
        $query = DB::table('cast')
        ->where('id', $id)
        ->update([
            "id" => $request["id"],
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);
        return redirect('/cast')->with('success', 'Berhasil Update');
    }

    public function destroy($id){
        $query = DB::table('cast')->where('id', $id)->delete();
        return view('/cast')->with('success', 'Berhasil di hapus');
    }
}
