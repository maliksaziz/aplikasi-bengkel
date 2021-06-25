<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembelianModel;
use App\Models\MekanikModel;
use App\Models\SparepartModel;
use App\Exports\ExportTransaksi;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class Pembelian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PembelianModel::paginate(10);

        return view("pembelian.index", ["ndata" =>  $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datatrx = PembelianModel::latest()->paginate(1);

        $datamk = MekanikModel::all();

        $dataspt = SparepartModel::where('stock', '>' , 0)->get();

        return view('pembelian.create', ['datamk' => $datamk, 'dataspt' => $dataspt, 'datatrx' => $datatrx]);
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
        $data = new PembelianModel;
        $spt = SparepartModel::findOrFail($request->id_sparepart);

        //sebelah kiri nama di DB dan sebelah kanan nama diform (view)
        $data->petugas = $request->petugas;
        $data->id_penjualan = $request->id_penjualan;
        $data->id_mekanik = $request->id_mekanik;
        $data->id_sparepart = $request->id_sparepart;
        $data->qty = $request->qty;
        $data->hrg_spt = $request->harga_spt;
        $data->hrg_jasa = $request->harga_jasa;
        $data->ttl_bayar = $request->ttl_bayar;
        $data->save();

        $spt->stock -= $request->qty;
        $spt->save();

        return redirect('/pembelian')->with('success', 'Berhasil Simpan Data');
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
        
    }

    public function printpdf() 
    {
        $data = PembelianModel::all();
        $pdf = PDF::loadview('pembelian.cetakpdf', ['data' => $data])->setPaper('A4', 'landscape');
        return $pdf->download('Laporan_transaksi.pdf');
        // return $pdf->stream();
    }

    public function printexcel(){
        return Excel::download(new ExportTransaksi, 'transaksi.xlsx');
    }
}
