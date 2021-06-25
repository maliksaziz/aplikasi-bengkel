<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MekanikModel extends Model
{
    use HasFactory;

    protected $table = "mekanik";

    protected $primaryKey = "id_mekanik";

    public function alamat()
    {
        return $this->hasOne('App\Models\AlamatModel', 'id_alamat', 'id_alamat');
    }

    public function alamat1()
    {
        return $this->hasOne('App\Models\AlamatModel');
    }
}
