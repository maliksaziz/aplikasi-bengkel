<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianModel extends Model
{
    use HasFactory;

    protected $table = "trx_penjualan";

    protected $primaryKey = "id";

    public function mekanik(){
    	//merelasikan tabel mahasiswa dengan tabel nilai
    	return $this->hasOne('App\Models\MekanikModel', 'id_mekanik', 'id_mekanik');
    }

    public function sparepart()
    {
        //merelasikan tabel dosen dengan tabel nilai
        return $this->belongsTo('App\Models\SparepartModel', 'id_sparepart', 'id_sparepart');
    }
}
