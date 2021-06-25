<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SparepartModel;

class Sparepart extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Query data dari tabel sparepart
        $data = SparepartModel::paginate(10);

        return view('sparepart.index', ['ndata' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sparepart.create');
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
        $data = new SparepartModel;
        
        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->sparepart = $request->nama;
        $data->stock = $request->stock;
        $data->harga = $request->harga;
        $data->save();

        $messages = [
                'required' => ':Atribut wajib diisi !',
                'min' => 'nama attribute harus diisi minimal :min karakter',
                'numeric' => 'Harga dan stock harus dengan angka',
            ];

            $this->validate($request,[
               'nama' => 'required|min:5',
               'harga' => 'required|numeric',
               ],$messages);

        //redirect setelah berhasil
        return redirect('/sparepart')->with('success', 'Berhasil Simpan Data');
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
        //memanggil model, query edngan kondisi where
        $data = SparepartModel::where('id_sparepart', $id)->get();

        return view('sparepart.edit', ['data' => $data]);
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
        $data = SparepartModel::where('id_sparepart', $id)->first();

        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->sparepart = $request->sparepart;
        $data->stock = $request->stock;
        $data->harga = $request->harga;
        $data->save();

        //redirect setelah berhasil
        return redirect('/sparepart')->with('success', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //memanggil model, query dengan kondisi where frist
        $data = SparepartModel::where('id_sparepart', $id)->first();
        $data->delete();

        //redirect setelah berhasil
        return redirect('/sparepart')->with('success', 'Berhasil Hapus Data');
    }

    public function search(Request $request)
    {
        //menangkap data dari pencarian
        $cari = $request->cari;

        //Query data dari tabel dosen
        $data = SparepartModel::where('sparepart', 'like', "%".$cari."%")->paginate();

        //session untuk tampilan old pada input
        session()->flashInput($request->input());

        //mengirim data ke view
        return view('sparepart.index', ['ndata' => $data]);
    }
}
