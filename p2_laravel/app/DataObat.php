<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataObat extends Model
{
    protected $primaryKey = 'id_obat';

    protected $fillable=['nama_obat','penyakit_id'];

    
    public function penyakitObat()
    {
    	return $this->belongsTo(DataPenyakit::class, 'penyakit_id');
    }
}
