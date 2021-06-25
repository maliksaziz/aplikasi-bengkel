<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MekanikModel;
use App\Models\AlamatModel;

class Mekanik extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = MekanikModel::paginate(5);

        //tampil view index data mekanik
        return view("mekanik.index", ["ndata" =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//input
    {
        $dataalm = AlamatModel::latest()->paginate(1);

        //tampil view form tambah data mekanik
        return view('mekanik.create', ['dataalm' => $dataalm]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memanggil model, query simmpan data
        $data = new MekanikModel;
        $dataal = new AlamatModel;
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->id_alamat = $request->id_alamat;
        $data->mekanik = $request->mekanik;
        $data->telp = $request->telp;
        $data->save();

        $dataal->jalan = $request->jalan;
        $dataal->kelurahan = $request->kelurahan;
        $dataal->kecamatan = $request->kecamatan;
        $dataal->kota = $request->kota;
        $dataal->save();


        $messages = [
            'required' => ':Atribut wajib diisi !',
            'min' => 'nama attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'numeric' => ':Nomer harus dengan angka',
        ];

        $this->validate($request,[
           'mekanik' => 'required|min:5|max:20',
           'telp' => 'required|numeric'
           ],$messages);
        //redirect setelah berhasil
        return redirect('/mekanik')->with('success', 'Berhasil Simpan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //memanggil model, query
        $datamk = MekanikModel::where('id_mekanik', $id)->get();

        //tampil view form show data mekanik
        return view('mekanik.show', ['datamk' => $datamk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //memanggil model, query
        $datamk = MekanikModel::where('id_mekanik', $id)->get();

        return view('mekanik.edit', ['datamk' => $datamk]);
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
        //memanggil model, query simmpan data
        $data = MekanikModel::where('id_mekanik', $id)->first();
        
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->mekanik = $request->mekanik;
        $data->telp = $request->telp;
        $data->save();

        //redirect setelah berhasil
        return redirect('/mekanik')->with('success', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Query data dari tabel mekanik
        $data = MekanikModel::where('id_mekanik', $id)->first();
        $data->delete();

        return redirect('/mekanik')->with('success', 'Berhasil Delete Data');
    }

    public function search(Request $request)
    {
        //menangkap data dari pencarian
        $cari = $request->cari;

        //Query data dari tabel mekanik
        $data = MekanikModel::where('mekanik', 'like', "%".$cari."%")->paginate();

        //session untuk tampilan old pada input
        session()->flashInput($request->input());

        //mengirim data ke view
        return view('mekanik.index', ['ndata' => $data]);
    }
}
