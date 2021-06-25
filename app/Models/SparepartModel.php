<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparepartModel extends Model
{
    use HasFactory;

    protected $table = 'sparepart';

    protected $primaryKey = 'id_sparepart';

    public function pembelian()
    {
        return $this->hasMany('App\Models\PembelianModel', 'id_sparepart', 'id_sparepart');
    }
}
