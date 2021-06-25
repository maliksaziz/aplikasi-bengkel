<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MekanikModel;
use App\Models\SparepartModel;
use App\Models\PetugasModel;
use App\Models\PembelianModel;

class Dashboard extends Controller
{
    //
    public function dashb()
    {

        //Query data dari tabel mekanik
        $datamk = MekanikModel::count('id_mekanik');

        //Query data dari tabel sparepart
        $dataspt = SparepartModel::count('id_sparepart');

        //Query data dari tabel petugas
        $dataus = PetugasModel::count('id');

        //Query data dari tabel pembelian
        $datapb = PembelianModel::count('id');

        return view('/dashboard', ['datamk' => $datamk, 'dataspt' => $dataspt, 'dataus' => $dataus, 'datapb' => $datapb]);
    }
}
