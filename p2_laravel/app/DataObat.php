<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    protected $primaryKey = 'id_obat';

    protected $fillable=['nama_obat','nama_penyakit'];
}
