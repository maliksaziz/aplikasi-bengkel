<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetugasModel;

class Petugas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = PetugasModel::paginate(5);

        return view("petugas.index", ["ndata" =>  $data]);
    }

    public function edit($id)
    {
        $data = PetugasModel::where('id', $id)->get();
        return view('petugas.edit', ['ndata' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = PetugasModel::where('id', $id)->first();

        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();

        return redirect('/petugas')->with('success', 'Berhasil Edit Data');
    }

    public function destroy($id)
    {
        $data = PetugasModel::where('id', $id)->first();
        $data->delete();
        return redirect('/petugas')->with('success', 'Berhasil Delete Data');
    }
}