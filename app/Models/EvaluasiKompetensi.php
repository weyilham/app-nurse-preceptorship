<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvaluasiKompetensi extends Model
{
    protected $table = 'evaluasi_kompetensis';
    protected $guarded = ['id'];

    public function detail_kompetensi()
    {
        return $this->hasMany(DetailEvaluasi::class, 'evaluasi_kompetensi_id');
    }
}
