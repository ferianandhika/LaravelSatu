<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPenyakit extends Model
{

	protected $primaryKey = 'id_penyakit';

    protected $fillable=['nama_penyakit','gejala'];
}
